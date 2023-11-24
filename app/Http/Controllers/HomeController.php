<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = DB::table('blog_posts')->orderBy('id','desc')->limit('2')->get();
        $popular = DB::table('blog_posts')->offset(2)->limit(2)->orderBy('id','desc')->get();
        $blogCatgories = DB::table('course_categories')->limit(5)->orderBy('id','desc')->get();
        $banners = DB::table('banners')->where('status',1)->get();
        $ourStory = DB::table('our_story_n_missions')->first();
        $founder = DB::table('founders')->first();
        $services = DB::table('services')->limit('3')->get();
        $testimonials = DB::table('testimonials')->get();
        return view('frontend.index', compact('blogs','popular','blogCatgories','banners','services','ourStory','founder','testimonials'));
    }
    
    public function blogsFrntendList(){
        $blogs = DB::table('blog_posts')->orderBy('id','desc')->get();
        $popular = DB::table('blog_posts')->offset(2)->limit(2)->orderBy('id','desc')->get();
        $blogCatgories = DB::table('course_categories')->limit(5)->orderBy('id','desc')->get();
        return view('frontend.blogs', compact('blogs','popular','blogCatgories'));
    }
   
    public function blogDetails($slug){
        $blogs = DB::table('blog_posts')->limit(2)->get();
        $blogDetails = DB::table('blog_posts')->where('slug',$slug)->first();
        $popular = DB::table('blog_posts')->offset(2)->limit(2)->orderBy('id','desc')->get();
        $blogCatgories = DB::table('course_categories')->limit(5)->orderBy('id','desc')->get();
        return view('frontend.blog_details', compact('blogs','blogDetails','popular','blogCatgories'));
    }

    public function servicesFrntendList(){
        $services = DB::table('services')->orderBy('id','desc')->get();
        return view('frontend.services', compact('services'));
    }

    public function serviceDetails($slug){
        $services = DB::table('services')->limit(2)->orderBy('id','desc')->get();
        $serviceDetails = DB::table('services')->where('slug',$slug)->first();
        return view('frontend.service_details', compact('serviceDetails','services'));
    }
    

    public function savedNewsLetter(Request $request){
        $emailExists=DB::table('newsletters')->where('email',$request->email)->first();
        if($emailExists){
            return back()->with('error', 'Your email already exists. Thanks!');
        }
        $data['email'] = $request->email;
        $data['created_at'] = Carbon::now();
        $id = DB::table('newsletters')->insertGetId($data);
        if($id){
            return back()->with('success', 'Thanks! for subscribed');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
    
    public function saveContactDetails(Request $request){
        $emailExists=DB::table('contacts')->where('email',$request->email)->first();
        if($emailExists){
            return back()->with('error', 'Your query already submitted. Thanks!');
        }
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['message'] = $request->message;
        $data['created_at'] = Carbon::now();
        $id = DB::table('contacts')->insertGetId($data);
        if($id){
            return back()->with('success', 'Quiry submitted, We will contact you shorlty. Thanks!');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
