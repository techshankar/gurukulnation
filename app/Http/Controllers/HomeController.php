<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\Faqs;
use App\Models\HowGurukulNationWork;
use App\Models\LearnerSupport;
use App\Models\Video;
use App\Models\WhyGurukulNation;

class HomeController extends Controller
{
    public function index()
    {
        $banners = DB::table('banners')->limit(1)->orderBy('id','desc')->get();
        $courseCategories = CourseCategory::latest()->take(5)->get();
        $courses = Course::latest()->take(5)->get();
        $faqs = Faqs::all();
        $howGurukulNation = HowGurukulNationWork::find(1);
        $whyGurukulNation = WhyGurukulNation::find(1);
        $learnerSupport = LearnerSupport::find(1);
        return view('frontend.index', compact('banners','courseCategories','courses','howGurukulNation','whyGurukulNation','faqs','learnerSupport'));
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

    public function courseList($slug){
        $catId=DB::table('course_categories')->where('slug',$slug)->first();
        $courses = Course::where('category_id',$catId->id)->get();
        $courseCategories = CourseCategory::all();
        $vdos = Video::limit(1)->take(1)->get();
        return view('frontend.courselist', compact('courses','courseCategories','vdos'));
    }
    
    public function courseDetails($slug){
        $catId=DB::table('course_categories')->where('slug',$slug)->first();
        $courses = Course::where('category_id',$catId->id)->first();
        $courseCategories = CourseCategory::where('id',$catId->id)->first();
        $vdos = Video::where('cat_id',$catId->id)->first();
        $allCourse = Course::all();
        $faqs = Faqs::all();
        return view('frontend.coursedetails', compact('courses','courseCategories','vdos','faqs','allCourse'));
    }

    public function aboutUs(){
        dd('about us need to implement theme page');
    }
    
    public function contactUs(){
        dd('contact us need to implement theme page');
    }
}
