<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    function index(){
        $services = DB::table('services')->paginate(10);
        return view('dashboards.admins.serviceList', compact('services'));
    }

    public function addServiceForm(){
        return view('dashboards.admins.addServiceForm');
    }

    function saveService(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        
        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('serviceImages'), $fileName);
            $data['image'] = url('public/serviceImages') . '/' . $fileName;
        }

        $data['title'] = $request->title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['description'] = $request->description;
        $data['created_at'] = Carbon::now();
        $id = DB::table('services')->insertGetId($data);
        if ($id) {
            return redirect('admin/services')->with('success', 'Service saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    function editService(Request $request, $id) {
        $services = DB::table('services')->where('id', $id)->first();
        return view('dashboards.admins.editService', compact('services'));
    }

    public function updateService(Request $request, $id){

        $data['title'] = $request->title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['description'] = $request->description;
        $data['updated_at'] = Carbon::now();
        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('serviceImages'), $fileName);
            $data['image'] = url('public/serviceImages') . '/' . $fileName;
        }
        $id = DB::table('services')->where('id', $id)->update($data);
        if ($id) {
            return redirect('admin/services')->with('success', 'Blog updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function deleteService($id){
        DB::table('services')->where('id',$id)->delete();
        return back()->with('success', 'Service deleted successfully');
    }

}