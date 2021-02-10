<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Ally;
use App\Models\Contact;
use App\Models\Tag;
use App\Models\Member;
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
        $projects = Project::orderByRaw('RAND()')->take(8)->get();
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
        $totalProjects = $request->totalProjects;
        $listedProjects = json_decode($request->listedProjects);
        $cantProjects = $request->cantProjects;
        if ($request->tag_id == 0){
            $projects = Project::whereNotIn('id', $listedProjects)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();
        }else{
            $projects = Project::where('tag_id', '=', $request->tag_id)
                            ->whereNotIn('id', $listedProjects)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();
        }

        foreach ($projects as $p){
            $cantProjects++;
            array_push($listedProjects, $p->id);
        }

        $tag_id = $request->tag_id;
        
        return view('landing.componentes.partials.sectionProjects')->with(compact('projects', 'totalProjects', 'listedProjects', 'cantProjects', 'tag_id'));
    }

    public function load_new_tab($tag_id){
        $tags = Tag::all();
        $listedProjects = array();
        $cantProjects = 0;
        if ($tag_id == 0){
            $totalProjects = Project::count();

            $projects = Project::orderByRaw('RAND()')
                            ->take(8)
                            ->get();

            foreach ($projects as $p){
                $cantProjects++;
                array_push($listedProjects, $p->id);
            }
        }else{
            $totalProjects = Project::where('tag_id', '=', $tag_id)->count();

            $projects = Project::where('tag_id', '=', $tag_id)
                            ->orderByRaw('RAND()')
                            ->take(8)
                            ->get();

            foreach ($projects as $p){
                $cantProjects++;
                array_push($listedProjects, $p->id);
            }
        }

        return view('landing.componentes.partials.sectionFull')->with(compact('tags', 'tag_id', 'listedProjects', 'cantProjects', 'totalProjects', 'projects'));
    }

    public function contactUs(Request $request)
    {
       
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'subject' => 'required|min:7',
            'message' => 'required|min:26',

        ]);
       Contact::create($request->all());
      Mail::to('alexisjoseva95@gmail.com')->queue(new MessageReceived($msg));
      return back()->with('success', 'Su mensaje se ha enviado ¡Gracias por contactarnos!');
    }
}
