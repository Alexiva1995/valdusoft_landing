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
    
      public function landing()
    {
        $tags = Tag::all();
        $projects_all = Project::orderByRaw('RAND()')->take(8)->get();
        $projects = Project::with('tag')->get();
        $allies = Ally::with('projects')->take(9)->get();
        $members = Member::all();
        return view('landing.index', compact('projects', 'projects_all','allies', 'tags', 'members'));
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
