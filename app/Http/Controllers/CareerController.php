<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::paginate(10);
        return view('dashboards.admins.careers.list', compact('careers'));
    }

    public function addCareerForm(){
        return view('dashboards.admins.careers.create');
    }
    
    public function saveCareer(Request $request) {
        
        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image'] = url('public/uploads') . '/' . $fileName;
        }

        $data['designation'] = $request->designation;
        $slug = STR::slug($request->designation);
        $data['slug'] = $slug;
        $data['job_location'] = $request->job_location;
        $data['qualification'] = $request->qualification;
        $data['exprience'] = $request->exprience;
        $data['overview'] = $request->overview;
        $data['roles_n_responsibilties'] = $request->roles_n_responsibilties;
        $data['created_at'] = Carbon::now();
        if($request->id){
            Career::find($request->id)->update($data);
        }else{
            Career::create($data)->id;
        }
        return redirect('admin/careers')->with('success', 'data saved successfully');
    }

    public function editCareer($id){
        $careers = Career::find($id);
        return view('dashboards.admins.careers.edit', compact('careers'));
    }
    
    public function deleteCareer($id){
        $careers = Career::find($id);
        if($careers->delete()){
            return redirect('admin/careers')->with('success', 'data deleted successfully');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
