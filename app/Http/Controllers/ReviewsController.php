<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use Illuminate\Support\Carbon;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Reviews::paginate(10);
        return view('dashboards.admins.reviews.list', compact('reviews'));
    }

    public function addReviewsForm(){
        return view('dashboards.admins.reviews.create');
    }
    
    public function saveReviews(Request $request) {

        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image'] = url('public/uploads') . '/' . $fileName;
        }
       
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['comments'] = $request->comments;
        $data['created_at'] = Carbon::now();
        $id='';
        if($request->id){
            $data['updated_at'] = Carbon::now();
            Reviews::find($request->id)->update($data);
        }else{
          $id = Reviews::create($data)->id;
        }
        return redirect('admin/reviews')->with('success', 'Reviews saved successfully');
    }

    public function editReviews($id){
        $reviews = Reviews::find($id);
        return view('dashboards.admins.reviews.edit', compact('reviews'));
    }
    
    public function deleteReviews($id){
        $reviews = Reviews::find($id);
        if($reviews->delete()){
            return redirect('admin/reviews')->with('success', 'Reviews deleted successfully');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
