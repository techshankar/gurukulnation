<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class TestmonialsController extends Controller
{
    function index(){
        $testimonials = DB::table('testimonials')->paginate(10);
        return view('dashboards.admins.testMonialsList', compact('testimonials'));
    }

    public function addTestimonialsForm(){
        return view('dashboards.admins.addTestimonialsForm');
    }

    function saveTestimonials(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('testimonialsImages'), $fileName);
            $data['image'] = url('public/testimonialsImages') . '/' . $fileName;
        }
        $data['title'] = $request->title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['description'] = $request->description;
        $data['created_at'] = Carbon::now();
        $id = DB::table('testimonials')->insertGetId($data);
        if ($id) {
            return redirect('admin/testmonials')->with('success', 'Data saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    function editTestimonials(Request $request, $slug) {
        $testimonials = DB::table('testimonials')->where('slug', $slug)->first();
        return view('dashboards.admins.editTestimonials', compact('testimonials'));
    }

    public function updateTestmonials(Request $request, $slug){
      
        $data['title'] = $request->title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['description'] = $request->description;
        $data['updated_at'] = Carbon::now();
        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('testimonialsImages'), $fileName);
            $data['image'] = url('public/testimonialsImages') . '/' . $fileName;
        }
        $id = DB::table('testimonials')->where('id', $request->id)->update($data);
        if ($id) {
            return redirect('admin/testmonials')->with('success', 'Data updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function deleteTestimonials($id){
        DB::table('testimonials')->where('id',$id)->delete();
        return back()->with('success', 'Data deleted successfully');
    }

}
