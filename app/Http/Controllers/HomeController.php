<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Tag;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

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
    
    public function index(){
        $tags = Tag::select('id', 'name')->get();
        $projects = Project::select('id', 'user_id', 'name', 'logo')
                        ->with('user:id,logo', 'tags:id,name', 'technologies:id,name')
                        ->withCount('tags', 'technologies')
                        ->where('visible_landing', '=', '1')
                        ->where('logo', '<>', NULL)
                        ->orderByRaw('RAND()')
                        ->take(8)
                        ->get();

        $totalProjects = Project::where('visible_landing', '=', '1')->where('logo', '<>', NULL)->count();
        $listedProjects = array();
        $cantProjects = 0;
        foreach ($projects as $p){
            $cantProjects++;
            array_push($listedProjects, $p->id);
        }
        $tag_id = 0;
        return view('index', compact('projects', 'tags', 'listedProjects', 'totalProjects', 'cantProjects', 'tag_id'));
    }

    public function load_more_projects(Request $request){
        $projects = collect(json_decode($request->projects));
        $totalProjects = $request->totalProjects;
        $listedProjects = json_decode($request->listedProjects);
        $cantProjects = $request->cantProjects;
        $tag_id = $request->tag_id;
        if ($request->tag_id == 0){
            $newProjects = Project::select('id', 'user_id', 'name', 'logo')
                            ->with('user:id,logo', 'tags:id,name', 'technologies:id,name')
                            ->withCount('tags', 'technologies')
                            ->where('visible_landing', '=', '1')
                            ->where('logo', '<>', NULL)
                            ->whereNotIn('id', $listedProjects)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();
        }else{
            $newProjects = Project::select('id', 'user_id', 'name', 'logo')
                            ->with('user:id,logo', 'tags:id,name', 'technologies:id,name')
                            ->withCount('tags', 'technologies')
                            ->whereHas('tags', function($query) use($tag_id){
                                $query->where('tag_id', '=', $tag_id);
                            })->where('visible_landing', '=', '1')
                            ->where('logo', '<>', NULL)
                            ->whereNotIn('id', $listedProjects)
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
        return view('projectsSection')->with(compact('projects', 'totalProjects', 'listedProjects', 'cantProjects', 'tag_id'));
    }

    public function load_new_tab($tag_id){
        $tags = Tag::select('id', 'name')->get();
        $listedProjects = array();
        $cantProjects = 0;
        if ($tag_id == 0){
            $totalProjects = Project::where('visible_landing', '=', '1')
                                ->where('logo', '<>', NULL)
                                ->count();

            $projects = Project::select('id', 'user_id', 'name', 'logo')
                            ->with('user:id,logo', 'tags:id,name', 'technologies:id,name')
                            ->withCount('tags', 'technologies')
                            ->where('visible_landing', '=', '1')
                            ->where('logo', '<>', NULL)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();

            foreach ($projects as $p){
                $cantProjects++;
                array_push($listedProjects, $p->id);
            }
        }else{
            $totalProjects = Project::whereHas('tags', function($query) use($tag_id){
                                    $query->where('tag_id', '=', $tag_id);
                                })->where('visible_landing', '=', '1')
                                ->where('logo', '<>', NULL)
                                ->count();

            $projects = Project::select('id', 'user_id', 'name', 'logo')
                            ->with('user:id,logo', 'tags:id,name', 'technologies:id,name')
                            ->withCount('tags', 'technologies')
                            ->whereHas('tags', function($query) use ($tag_id){
                                $query->where('tag_id', '=', $tag_id);
                            })->where('visible_landing', '=', '1')
                            ->where('logo', '<>', NULL)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();

            foreach ($projects as $p){
                $cantProjects++;
                array_push($listedProjects, $p->id);
            }
        }

        return view('projectsSectionFull')->with(compact('tags', 'tag_id', 'listedProjects', 'cantProjects', 'totalProjects', 'projects'));
    }

    public function show_project($id){
        $project = Project::where('id', '=', $id)
                        ->with('user', 'tags', 'technologies')
                        ->withCount('tags', 'technologies')
                        ->first();    
        
        return view('showProjectModalContent')->with(compact('project'));
    }

    public function contactUs(Request $request){
       // return $request->all();
       request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:7',
            'phone' => 'required|min:13',
            'message' => 'required|min:26',
            'g-recaptcha-response' => 'required',
        ]);

       	$msg = ([
        	'name' => $request->get('name'),
        	'email' => $request->get('email'),
        	'subject' => $request->get('subject'),
        	'phone' => $request->get('phone'),
        	'message' => $request->get('message'),
        ]);

      	Contact::create($msg);

      	//Mail::to('bryanjose846@gmail.com')->queue(new MessageReceived($msg));
      	Mail::to('alexisjoseva95@gmail.com')->queue(new MessageReceived($msg));
      	return back()->with('success', 'Su mensaje se ha enviado ¡Gracias por contactarnos!');
    }
}
