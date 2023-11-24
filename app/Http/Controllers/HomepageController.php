<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\mainBanner;
use App\Models\About;
use App\Models\OurStoryAndMission;
class HomepageController extends Controller
{
    function index()
    {
        $homepagebanners = DB::table('homepagebanner')->get();
        return view('dashboards.admins.homepage', compact('homepagebanners'));
    }
    function packersMovers(Request $request)
    {


        $request->validate([
            'image1' => 'mimes:png,jpeg,jpg|max:2048',
            'image2' => 'mimes:png,jpeg,jpg|max:2048',
            'image3' => 'mimes:png,jpeg,jpg|max:2048',
            'image4' => 'mimes:png,jpeg,jpg|max:2048',
        ]);


        if ($request->image1) {
            $fileName1 = '1' . time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('uploads'), $fileName1);
            $data['image1'] = url('public/uploads') . '/' . $fileName1;
        }
        if ($request->image2) {
            $fileName2 = '2' . time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('uploads'), $fileName2);
            $data['image2'] = url('public/uploads') . '/' . $fileName2;
        }
        if ($request->image3) {
            $fileName3 = '3' . time() . '.' . $request->image3->extension();
            $request->image3->move(public_path('uploads'), $fileName3);
            $data['image3'] = url('public/uploads') . '/' . $fileName3;
        }
        if ($request->image4) {
            $fileName4 = '4' . time() . '.' . $request->image4->extension();
            $request->image4->move(public_path('uploads'), $fileName4);
            $data['image4'] = url('public/uploads') . '/' . $fileName4;
        }

        $id = $request->uniqueId;
        $data['updated_at'] = Carbon::now();
        $homepagebanners = DB::table('homepagebanner')->where('id', $id)->update($data);


        return back()->with('success', 'File uploaded successfully');
        // print_r($data);die;
    }
    function banners()
    {
        return view('dashboards.admins.homebanners');
    }
    function banner_list()
    {
        $banners = DB::table('banners')->orderBy('id','desc')->paginate(10);
        return view('dashboards.admins.bannerlist', compact('banners'));
    }

    function upload_banners(Request $request)
    {
        $request->validate([
            'banner' => 'required|mimes:png,jpeg,jpg|max:3048',
            'status' => 'required'
        ]);

        if ($request->banner) {
            $fileName1 = 'banner' . time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('uploads'), $fileName1);
            $data['banner'] = url('public/uploads') . '/' . $fileName1;
        }
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $id = DB::table('banners')->insertGetId($data);
        if ($id) {
            return redirect('admin/banner_list')->with('success', 'File uploaded successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
    function banner_edit(Request $request, $id)
    {
        $data['banner'] = DB::table('banners')->where('id', $id)->first();

        return view('dashboards.admins.editHomebanners', $data);
    }
    function edit_banners(Request $request, $id)
    {
        $request->validate([
            'banner' => 'mimes:png,jpeg,jpg|max:2048',
            'status' => 'required'
        ]);

        if ($request->banner) {
            $fileName1 = 'banner' . time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('uploads'), $fileName1);
            $data['banner'] = url('public/uploads') . '/' . $fileName1;
        }
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();
        $id = DB::table('banners')->where('id', $id)->update($data);
        if ($id) {
            return redirect('admin/banner_list')->with('success', 'Data updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    
// Banners section 
    public function mainBannerForm(){
        $homepagemainbanners = mainBanner::where('id',1)->first();
        return view('dashboards.admins.mainBanner', compact('homepagemainbanners'));
    }
    public function uploadMainBanners(Request $request){
        $request->validate([
            'banner1' => 'mimes:png,jpeg,jpg|max:2048',
            'banner2' => 'mimes:png,jpeg,jpg|max:2048',
            'banner3' => 'mimes:png,jpeg,jpg|max:2048',
        ]);

        if ($request->banner1) {
            $fileName1 = 'bannerone' . time() . '.' . $request->banner1->extension();
            $request->banner1->move(public_path('mainBannersUploadedFolder'), $fileName1);
            $data['banner1'] = url('public/mainBannersUploadedFolder') . '/' . $fileName1;
        }
        if ($request->banner2) {
            $fileName2 = 'bannertwo' . time() . '.' . $request->banner2->extension();
            $request->banner2->move(public_path('mainBannersUploadedFolder'), $fileName2);
            $data['banner2'] = url('public/mainBannersUploadedFolder') . '/' . $fileName2;
        }
        if ($request->banner3) {
            $fileName3 = 'bannerthree' . time() . '.' . $request->banner3->extension();
            $request->banner3->move(public_path('mainBannersUploadedFolder'), $fileName3);
            $data['banner3'] = url('public/mainBannersUploadedFolder') . '/' . $fileName3;
        }

        $data['title1'] = $request->title1;
        $data['title2'] = $request->title2;
        $data['title3'] = $request->title3;
        $data['content1'] = $request->content1;
        $data['content2'] = $request->content2;
        $data['content3'] = $request->content3;
        $data['updated_at'] = Carbon::now();
        $id = mainBanner::where('id', $request->id)->update($data);
        if ($id) {
            return back()->with('success', 'Record saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function ourStoryNMissionForm(){
        $homepageOurStoryAndMission = OurStoryAndMission::where('id',1)->first();
        return view('dashboards.admins.OurStoryAndMission', compact('homepageOurStoryAndMission'));
    }

    public function ouStoryAndMissionUpdate(Request $request){
        $request->validate([
            'image' => 'mimes:png,jpeg,jpg|max:2048',
        ]);

        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('mainBannersUploadedFolder'), $fileName);
            $data['image'] = url('public/mainBannersUploadedFolder') . '/' . $fileName;
        }
        

        $data['title_our_story'] = $request->title_our_story;
        $data['title_our_mission'] = $request->title_our_mission;
        $data['desc_our_story'] = $request->desc_our_story;
        $data['foundend_yrs'] = $request->foundend_yrs;
        $data['disc_our_mission'] = $request->disc_our_mission;
        $data['bullets1_our_mission'] = $request->bullets1_our_mission;
        $data['bullets2_our_mission'] = $request->bullets2_our_mission;
        $data['updated_at'] = Carbon::now();
        $id = OurStoryAndMission::where('id', $request->id)->update($data);
        if ($id) {
            return back()->with('success', 'Record saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }

    }
    
    public function aboutForm(){
        $about = About::where('id',1)->first();
        return view('dashboards.admins.aboutForm', compact('about'));
    }

    public function aboutUpdate(Request $request){
        $request->validate([
            'image' => 'mimes:png,jpeg,jpg|max:2048',
        ]);

        if ($request->image) {
            $fileName = 'image' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('mainBannersUploadedFolder'), $fileName);
            $data['image'] = url('public/mainBannersUploadedFolder') . '/' . $fileName;
        }
        

        $data['title'] = $request->title;
        $data['details'] = $request->details;
        $data['updated_at'] = Carbon::now();
        if($request->id){
         $id = About::where('id', $request->id)->update($data);
        }else{
            $id = About::create($data);
        }
        if ($id) {
            return back()->with('success', 'Data saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }

    }
    public function termsncondandprvcypolicyForm(){
        $trmsNCondNPrvcyPlcy = DB::table('termsandprivacies')->where('id',1)->first();
        return view('dashboards.admins.termsNPrvcyForm', compact('trmsNCondNPrvcyPlcy'));
    }

    public function termsncondandprvcypolicyUpdate(Request $request){        

        $data['title_trms'] = $request->title_trms;
        $data['title_prvcy'] = $request->title_prvcy;
        $data['desc_trms'] = $request->desc_trms;
        $data['desc_prvcy'] = $request->desc_prvcy;
        $data['updated_at'] = Carbon::now();
        if($request->id){
         $id = DB::table('termsandprivacies')->where('id', $request->id)->update($data);
        }else{
            $id = DB::table('termsandprivacies')->insertGetId($data);
        }
        if ($id) {
            return back()->with('success', 'Data saved successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }

    }
}
