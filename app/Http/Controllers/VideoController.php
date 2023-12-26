<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Video;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        $videos = DB::table('videos as v')
        ->join('courses as c', 'c.id', '=', 'v.course_id')
        ->join('course_categories as cc', 'cc.id', '=', 'v.cat_id')->select('v.*','cc.name','c.title','c.thumbnail')->orderBy('id','DESC')->paginate(10);
        return view('dashboards.admins.courses.video.list', compact('videos'));
    }

    public function addVideoForm(){
        $courseCatcary = CourseCategory::all();
        $course = Course::all();
        return view('dashboards.admins.courses.video.create', compact('courseCatcary','course'));
    }
    
    public function saveVideo(Request $request) {
        if ($request->video) {
            $fileName = 'video' . time() . '.' . $request->video->extension();
            $request->video->move(public_path('courseThumbnailsNvdo'), $fileName);
            $data['video'] = url('public/courseThumbnailsNvdo') . '/' . $fileName;
            $data['vdo_url'] = '';
        }else{
            $data['video']='';
            $data['vdo_url'] = $request->vdo_url;
        }
        
        $data['vdo_heading'] = $request->vdo_heading;
        $data['cat_id'] = $request->cat_id;
        $data['course_id'] = $request->course_id;
        $data['vdo_priority'] = $request->vdo_priority;
        $data['language'] = $request->language;
        $data['sub_title'] = $request->sub_title;
        $data['watch_on'] = $request->watch_on;
        $data['access_time'] = $request->access_time;
        $data['created_at'] = Carbon::now();
        $id='';
        if($request->id){
            Video::find($request->id)->update($data);
        }else{
          $id = Video::create($data)->id;
        }
        return redirect('admin/videos')->with('success', 'Video saved successfully');
    }

    public function editVideo($id){
        $videos = Video::find($id);
        $courseCatcary = CourseCategory::all();
        $course = Course::all();
        return view('dashboards.admins.courses.video.edit', compact('videos','courseCatcary','course'));
    }
    
    public function deleteVideo($id){
        $videos = Video::find($id);
        if($videos->delete()){
            return redirect('admin/videos')->with('success', 'Video deleted successfully');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
