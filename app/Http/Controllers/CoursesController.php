<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index()
    {
        $course = Course::paginate(10);
        return view('dashboards.admins.courses.list', compact('course'));
    }

    public function addCourseForm()
    {
        $courseCatcary = CourseCategory::all();
        return view('dashboards.admins.courses.create', compact('courseCatcary'));
    }

    public function saveCourse(Request $request)
    {
        $whatULearn = implode(',', $request->what_you_will_learn);
        $brands = implode(',', $request->brands);
        $request->validate([
            'title' => 'required',
        ]);


        if ($request->thumbnail) {
            $fileName = 'thumbnail' . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('courseThumbnailsNvdo'), $fileName);
            $data['thumbnail'] = url('public/courseThumbnailsNvdo') . '/' . $fileName;
        }

        if ($request->certificate_img) {
            $fileName = 'certificate_img' . time() . '.' . $request->certificate_img->extension();
            $request->certificate_img->move(public_path('courseThumbnailsNvdo'), $fileName);
            $data['certificate_img'] = url('public/courseThumbnailsNvdo') . '/' . $fileName;
        }

        $data['category_id'] = $request->category_id;
        $data['brands'] = $brands;
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['what_you_will_learn'] = $whatULearn; 
        $data['course_description'] = $request->course_description;
        $data['created_at'] = Carbon::now();
        $id = Course::create($data)->id;
        if ($id) {
            return redirect('admin/courses')->with('success', 'Course saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function editCourse($id)
    {
        $courses = Course::find($id);
        $courseCatcary = CourseCategory::all();
        return view('dashboards.admins.courses.edit', compact('courses','courseCatcary'));
    }

    public function updateCourse(Request $request, $id)
    {
        $brands = implode(',', $request->brands);
        if ($request->thumbnail) {
            $fileName = 'thumbnail' . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('courseThumbnailsNvdo'), $fileName);
            $data['thumbnail'] = url('public/courseThumbnailsNvdo') . '/' . $fileName;
        }
        
        if ($request->certificate_img) {
            $fileName = 'certificate_img' . time() . '.' . $request->certificate_img->extension();
            $request->certificate_img->move(public_path('courseThumbnailsNvdo'), $fileName);
            $data['certificate_img'] = url('public/courseThumbnailsNvdo') . '/' . $fileName;
        }

        $data['category_id'] = $request->category_id;
        $data['brands'] = $brands;
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['what_you_will_learn'] = $request->what_you_will_learn;
        $data['course_description'] = $request->course_description;
        $data['created_at'] = Carbon::now();
        $id = Course::where('id', $id)->update($data);
        if ($id) {
            return redirect('admin/courses')->with('success', 'Course updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        if($course){
            $course->delete();
            return redirect('admin/courses')->with('success', 'Course deleted successfully');
        }
    }
}
