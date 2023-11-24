<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    function index(){
        $blogs = DB::table('blog_posts')->join('course_categories','blog_posts.category_id','course_categories.id')->select('blog_posts.*','course_categories.name')->orderBy('id', 'desc')->paginate(10);
        return view('dashboards.admins.blogList', compact('blogs'));
    }

    public function addBlogForm(){
        $blogCategory = DB::table('course_categories')->get();
        return view('dashboards.admins.addBlogForm', compact('blogCategory'));
    }

    function saveBlog(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);
        
        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogImages'), $fileName);
            $data['image'] = url('public/blogImages') . '/' . $fileName;
        }

        $data['title'] = $request->title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['category_id'] = $request->category_id;
        $data['content'] = $request->content;
        $data['created_at'] = Carbon::now();
        $id = DB::table('blog_posts')->insertGetId($data);
        if ($id) {
            return redirect('admin/blogs')->with('success', 'Blog saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    function editBlog(Request $request, $id) {
        $blogs = DB::table('blog_posts')->where('id', $id)->first();
        $blogCategory = DB::table('course_categories')->get();

        return view('dashboards.admins.editBlog', compact('blogCategory','blogs'));
    }

    public function updateBlog(Request $request, $id){

        $data['title'] = $request->title;
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $data['category_id'] = $request->category_id;
        $data['content'] = $request->content;
        $data['updated_at'] = Carbon::now();
        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogImages'), $fileName);
            $data['image'] = url('public/blogImages') . '/' . $fileName;
        }
        $id = DB::table('blog_posts')->where('id', $id)->update($data);
        if ($id) {
            return redirect('admin/blogs')->with('success', 'Blog updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function deleteBlog($id){
        DB::table('blog_posts')->where('id',$id)->delete();
        return back()->with('success', 'Blog deleted successfully');
    }

}
