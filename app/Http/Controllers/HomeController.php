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
use App\Models\About;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Reviews;

class HomeController extends Controller
{
    public function index()
    {
        $banners = DB::table('banners')->limit(1)->orderBy('id', 'desc')->where('status', 1)->get();
        $courseCategories = CourseCategory::latest()->take(5)->get();
        $courses = Course::latest()->take(5)->get();
        $faqs = Faqs::all();
        $howGurukulNation = HowGurukulNationWork::find(1);
        $whyGurukulNation = WhyGurukulNation::find(1);
        $learnerSupport = LearnerSupport::find(1);
        return view('frontend.index', compact('banners', 'courseCategories', 'courses', 'howGurukulNation', 'whyGurukulNation', 'faqs', 'learnerSupport'));
    }

    public function blogsFrntendList()
    {
        $blogs = DB::table('blog_posts')->orderBy('id', 'desc')->get();
        $popular = DB::table('blog_posts')->offset(2)->limit(2)->orderBy('id', 'desc')->get();
        $blogCatgories = DB::table('course_categories')->limit(5)->orderBy('id', 'desc')->get();
        return view('frontend.blogs', compact('blogs', 'popular', 'blogCatgories'));
    }

    public function blogDetails($slug)
    {
        $blogs = DB::table('blog_posts')->limit(2)->get();
        $blogDetails = DB::table('blog_posts')->where('slug', $slug)->first();
        $popular = DB::table('blog_posts')->offset(2)->limit(2)->orderBy('id', 'desc')->get();
        $blogCatgories = DB::table('course_categories')->limit(5)->orderBy('id', 'desc')->get();
        return view('frontend.blog_details', compact('blogs', 'blogDetails', 'popular', 'blogCatgories'));
    }

    public function servicesFrntendList()
    {
        $services = DB::table('services')->orderBy('id', 'desc')->get();
        return view('frontend.services', compact('services'));
    }

    public function serviceDetails($slug)
    {
        $services = DB::table('services')->limit(2)->orderBy('id', 'desc')->get();
        $serviceDetails = DB::table('services')->where('slug', $slug)->first();
        return view('frontend.service_details', compact('serviceDetails', 'services'));
    }


    public function savedNewsLetter(Request $request)
    {
        $emailExists = DB::table('newsletters')->where('email', $request->email)->first();
        if ($emailExists) {
            return back()->with('error', 'Your email already exists. Thanks!');
        }
        $data['email'] = $request->email;
        $data['created_at'] = Carbon::now();
        $id = DB::table('newsletters')->insertGetId($data);
        if ($id) {
            return back()->with('success', 'Thanks! for subscribed');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function saveContactDetails(Request $request)
    {
        $emailExists = DB::table('contacts')->where('email', $request->email)->first();
        if ($emailExists) {
            return back()->with('error', 'Your query already submitted. Thanks!');
        }
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['message'] = $request->message;
        $data['status'] = 2;
        $data['created_at'] = Carbon::now();
        $id = DB::table('contacts')->insertGetId($data);
        if ($id) {
            return back()->with('success', 'Quiry submitted, We will contact you shorlty. Thanks!');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function courseList($slug)
    {
        $catId = DB::table('course_categories')->where('slug', $slug)->first();
        $courses = Course::where('category_id', $catId->id)->get();
        $courseCategories = CourseCategory::all();
        $vdos = Video::limit(1)->take(1)->get();
        return view('frontend.courselist', compact('courses', 'courseCategories', 'vdos'));
    }

    public function courseDetails($slug)
    {
        $courses = Course::where('slug', $slug)->first();
        $courseCategories = CourseCategory::where('id', $courses->category_id)->first();
        $vdos = Video::where('course_id', $courses->id)->first();
        if (!empty($vdos)) {
            $allVdos = Video::where('course_id', $courses->id)->get();
            $faqs = Faqs::all();
            return view('frontend.coursedetails', compact('courses', 'courseCategories', 'vdos', 'faqs', 'allVdos'));
        } else {
            return back()->with('error', 'Whops! Sorry Video not found coming soon.');
        }
    }

    public function aboutUs()
    {
        $data = About::find(1);
        return view('frontend.about_us', compact('data'));
    }

    public function contactUs()
    {
        $contact = Contact::where('status', 2)->first();
        return view('frontend.contact_us', compact('contact'));
    }

    public function reviews()
    {
        $reviews = Reviews::OrderBy('id', 'DESC')->get();
        return view('frontend.reviews', compact('reviews'));
    }

    public function careerList()
    {
        $careerList = Career::OrderBy('id', 'DESC')->get();
        return view('frontend.careerlist', compact('careerList'));
    }

    public function careerDetails($slug)
    {
        $careerDetails = Career::where('slug', $slug)->first();
        return view('frontend.careerdetails', compact('careerDetails'));
    }

    public function applyJob(Request $request)
    {
        $emailExists = DB::table('apply_jobs')->where('email', $request->email)->first();
        if ($emailExists) {
            return back()->with('error', 'You have already applied. Thanks!');
        }

        if ($request->resume) {
            $fileName = 'resume' . time() . '.' . $request->resume->extension();
            $request->resume->move(public_path('uploads'), $fileName);
            $data['resume'] = url('public/uploads') . '/' . $fileName;
        }

        $data['job_title'] = $request->job_title;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['referenced_by'] = $request->referenced_by;
        $data['mobile'] = $request->mobile;
        $data['current_location'] = $request->current_location;
        if (!empty($request->ready_to_relocate)) {
            $data['ready_to_relocate'] = $request->ready_to_relocate;
        } else {
            $data['ready_to_relocate'] = "No";
        }
        $data['job_description'] = $request->job_description;
        $data['created_at'] = Carbon::now();
        DB::table('apply_jobs')->insert($data);
        return redirect('career/list')->with('success', 'Successfully applied Thanks!');
    }

    public function upskillingCourse()
    {
        $upSkillingCourse = Course::OrderBy('id', 'DESC')->get();
        $courseCategories = CourseCategory::orderBy('id', 'DESC')->get();
        return view('frontend.upskillingcourse', compact('upSkillingCourse', 'courseCategories'));
    }

    public function getCourse($id)
    {
        $course = Course::where('category_id', $id)->get();
        $html = '';
        foreach ($course as $key=>$row) {
            $courseCat = CourseCategory::find($row->category_id);
            if($key==0){
            $html .= '
            <div class="counter__heading">
                <h3>' .$courseCat->name. '</h3>
            </div>';
        }
            $html .= '
            <div class="col-lg-4">
            <img src="' . $row->thumbnail . '">
            <h4>'.$row->title.'</h4>
            <a href="'.url('/course/details/'.$row->slug.'/').'">View Details</a>
            <strong><h4 style="margin-left: 15em; width: 15px; color: blue;">₹' . $row->price . '</h4></strong>
            </div><span style="margin-left: 15em;"></span>';
        }
        return response()->json($html);
    }
}
