<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Ally;
use App\Models\Contact;
use App\Models\Tag;
use App\Models\Member;
use App\Models\Technology;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use DB; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    public function admin(){
        $proyectos = Project::with('ally', 'tags', 'technologies')
                        ->orderBy('id', 'ASC')
                        ->get();

        return view('admin')->with(compact('proyectos'));
    }

    public function edit_project($id){
        $proyecto = Project::with('ally', 'tags', 'technologies')
                        ->where('id', '=', $id)
                        ->first();

        $aliados = Ally::orderBy('id', 'ASC')->get();

        $etiquetas = Tag::orderBy('id', 'ASC')->get();
        $etiquetasActivas = [];
        foreach ($proyecto->tags as $tag){
            array_push($etiquetasActivas, $tag->id);
        }

        $tecnologias = Technology::orderBy('id', 'ASC')->get();
        $tecnologiasActivas = [];
        foreach ($proyecto->technologies as $technology){
            array_push($tecnologiasActivas, $technology->id);
        }

        return view('editProject')->with(compact('proyecto', 'aliados', 'etiquetas', 'tecnologias', 'etiquetasActivas', 'tecnologiasActivas'));
    }

    public function update_project(Request $request){
        $proyecto = Project::find($request->project_id);
        $proyecto->fill($request->all());
        $proyecto->save();

        DB::table('projects_tags')
            ->where('project_id', '=', $proyecto->id)
            ->delete();

        if (!is_null($request->tags)){
            foreach ($request->tags as $tag){
                DB::table('projects_tags')->insert(
                    ['project_id' => $proyecto->id, 'tag_id' => $tag]
                );
            }
        }

        DB::table('projects_technologies')
            ->where('project_id', '=', $proyecto->id)
            ->delete();

        if (!is_null($request->technologies)){
            foreach ($request->technologies as $technology){
                DB::table('projects_technologies')->insert(
                    ['project_id' => $proyecto->id, 'technology_id' => $technology]
                );
            }
        }

        return redirect('admin/edit-project/'.$proyecto->id)->with('msj-exitoso', 'Proyecto Actualizado');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function landing(){
        $tags = Tag::all();
        //$projects_all = Project::orderByRaw('RAND()')->take(8)->get();
        //$projects = Project::with('tag')->get();
        $projects = Project::with('ally', 'tags', 'technologies')
                        ->withCount('tags', 'technologies')
                        ->orderByRaw('RAND()')
                        ->take(8)
                        ->get();

        $totalProjects = Project::count();
        $listedProjects = array();
        $cantProjects = 0;
        foreach ($projects as $p){
            $cantProjects++;
            array_push($listedProjects, $p->id);
        }
        $allies = Ally::with('projects')->take(9)->get();
        $members = Member::all();
        $tag_id = 0;
        //return view('landing.index', compact('projects', 'projects_all','allies', 'tags', 'members'));
        return view('landing.index', compact('projects', 'allies', 'tags', 'members', 'listedProjects', 'totalProjects', 'cantProjects', 'tag_id'));
    }

    public function load_more_projects(Request $request){
        $projects = collect(json_decode($request->projects));
        $totalProjects = $request->totalProjects;
        $listedProjects = json_decode($request->listedProjects);
        $cantProjects = $request->cantProjects;
        $tag_id = $request->tag_id;
        if ($request->tag_id == 0){
            $newProjects = Project::with('ally', 'tags', 'technologies')
                            ->withCount('tags', 'technologies')
                            ->whereNotIn('id', $listedProjects)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();
        }else{
            $newProjects = Project::with('ally', 'tags', 'technologies')
                            ->withCount('tags', 'technologies')
                            ->whereHas('tags', function($query) use($tag_id){
                                $query->where('tag_id', '=', $tag_id);
                            })->whereNotIn('id', $listedProjects)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();
        }

        foreach ($newProjects as $newProject){
            $cantProjects++;
            $projects->push($newProject);
        }

        foreach ($projects as $p){
            array_push($listedProjects, $p->id);
        }
        
        //return response()->json($projects);
        return view('landing.componentes.partials.sectionProjects')->with(compact('projects', 'totalProjects', 'listedProjects', 'cantProjects', 'tag_id'));
    }

    public function load_new_tab($tag_id){
        $tags = Tag::all();
        $listedProjects = array();
        $cantProjects = 0;
        if ($tag_id == 0){
            $totalProjects = Project::count();

            $projects = Project::with('ally', 'tags', 'technologies')
                            ->withCount('tags', 'technologies')
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();

            foreach ($projects as $p){
                $cantProjects++;
                array_push($listedProjects, $p->id);
            }
        }else{
            $totalProjects = Project::with('ally', 'tags', 'technologies')
                                ->withCount('tags', 'technologies')
                                ->whereHas('tags', function($query) use($tag_id){
                                    $query->where('tag_id', '=', $tag_id);
                                })->count();

            $projects = Project::with('ally', 'tags', 'technologies')
                            ->withCount('tags', 'technologies')
                            ->whereHas('tags', function($query) use ($tag_id){
                                $query->where('tag_id', '=', $tag_id);
                            })->orderByRaw('RAND()')
                            ->take(8)
                            ->get();

            foreach ($projects as $p){
                $cantProjects++;
                array_push($listedProjects, $p->id);
            }
        }

        return view('landing.componentes.partials.sectionFull')->with(compact('tags', 'tag_id', 'listedProjects', 'cantProjects', 'totalProjects', 'projects'));
    }

    public function show_project($id){
        $proyecto = Project::where('id', '=', $id)
                        ->with('ally', 'tags', 'technologies')
                        ->withCount('tags', 'technologies')
                        ->first();    
        
        return view('landing.componentes.modal')->with(compact('proyecto'));
    }

    public function contactUs(Request $request)
    {
        $msg = request()->all();
        
        Contact::create($request->all());
        Mail::to('alexisjoseva95@gmail.com')->queue(new MessageReceived($msg));

        $data['email'] = $request->email;
        Mail::send('emails.messageSuccess', ['data' => $data], function($msg) use ($data){
            $msg->to($data['email']);
            $msg->subject('Solicitud Recibida');
            $msg->from('info@valdusoft.com');
        });

        return back()->with('success', 'Su mensaje se ha enviado ¡Gracias por contactarnos!');
    }
}
