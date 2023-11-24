<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class categoryController extends Controller
{
    function index()
    {
        $category = DB::table('course_categories')->orderBy('id', 'desc')->paginate(10);
        return view('dashboards.admins.categoryList', compact('category'));
    }

    function addcategory(Request $request)
    {
        return view('dashboards.admins.addCategory');
    }
    function savecategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data['name'] = $request->name;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $id = DB::table('course_categories')->insertGetId($data);
        if ($id) {
            return redirect('admin/category')->with('success', 'Category saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
    function editcategory(Request $request, $id)
    {
        $category = DB::table('course_categories')->where('id', $id)->first();
        return view('dashboards.admins.editCategory', compact('category'));
    }

    function updatecategory(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['updated_at'] = Carbon::now();
        $id = DB::table('course_categories')->where('id', $id)->update($data);
        if ($id) {
            return redirect('admin/category')->with('success', 'Data updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function deletecategory($id){
            DB::table('course_categories')->where('id', $id)->delete();
            return redirect('admin/category')->with('success', 'Data deleted successfully');
    }
    function sub_category()
    {
        $category = DB::table('sub_categorise')->select('sub_categorise.*', 'categorise.name')->join('categorise', 'sub_categorise.cat_id', '=', 'categorise.id')->orderBy('id', 'desc')->paginate(10);
        return view('dashboards.admins.subCategoryList', compact('category'));
    }

    function addSubCategory(Request $request)
    {
        $category = DB::table('categorise')->orderBy('id', 'desc')->where('status', 1)->get();
        return view('dashboards.admins.addSubCategory', compact('category'));
    }
    function saveSubCategory(Request $request)
    {
        $request->validate([
            'sub_cat_name' => 'required',
            'cat_id' => 'required',
            'status' => 'required'
        ]);

        $data['sub_cat_image'] = '';
        if ($request->sub_cat_image) {
            $fileName1 = '1' . time() . '.' . $request->sub_cat_image->extension();
            $request->sub_cat_image->move(public_path('uploads'), $fileName1);
            $data['sub_cat_image'] = url('public/uploads') . '/' . $fileName1;
        }

        $data['sub_cat_name'] = $request->sub_cat_name;
        $data['cat_id'] = $request->cat_id;
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $id = DB::table('sub_categorise')->insertGetId($data);
        if ($id) {
            return back()->with('success', 'File uploaded successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
    function editSubCategory(Request $request, $id)
    {
        $subCategory = DB::table('sub_categorise')->where('id', $id)->first();
        $category = DB::table('categorise')->orderBy('id', 'desc')->where('status', 1)->get();

        return view('dashboards.admins.editSubCategory', compact('category','subCategory'));
    }

    function updateSubCategory(Request $request, $id)
    {
        $data['sub_cat_name'] = $request->sub_cat_name;
        $data['cat_id'] = $request->cat_id;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();
        if ($request->sub_cat_image) {
            $fileName1 = '1' . time() . '.' . $request->sub_cat_image->extension();
            $request->sub_cat_image->move(public_path('uploads'), $fileName1);
            $data['sub_cat_image'] = url('public/uploads') . '/' . $fileName1;
        }
        $id = DB::table('sub_categorise')->where('id', $id)->update($data);
        if ($id) {
            return back()->with('success', 'Data updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
