<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Users;
use App\Models\Settings;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboards.admins.index');
    }

    function profile()
    {
        return view('dashboards.admins.profile');
    }
    function settings()
    {
        $settings = Settings::where('id',1)->first();
        return view('dashboards.admins.settings', compact('settings'));
    }
    

    public function settingsUpdate(Request $request){
        $data['meta_title'] = $request->meta_title;
        $data['meta_desc'] = $request->meta_desc;
        $data['whatsp'] = $request->meta_desc;
        $data['privacy_policy'] = $request->privacy_policy;
        $data['termsncondtions'] = $request->termsncondtions;
        $data['whatsp'] = $request->whatsp;
        $data['twitter'] = $request->twitter;
        $data['insta'] = $request->insta;
        $data['fb'] = $request->fb;
        $data['updated_at'] = Carbon::now();
        if($request->id){
         $id = Settings::where('id', $request->id)->update($data);
        }else{
            $data['created_at'] = Carbon::now();
            $id = Settings::create($data);
        }
        if ($id) {
            return back()->with('success', 'Updated successfully');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }

    }

    function updateInfo(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'favoritecolor' => 'required',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $query = Users::find(Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'favoriteColor' => $request->favoritecolor,
            ]);

            if (!$query) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile info has been update successfuly.']);
            }
        }
    }

    function updatePicture(Request $request)
    {
        $path = 'users/images/';
        $file = $request->file('admin_image');
        $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

        //Upload new image
        $upload = $file->move(public_path($path), $new_name);

        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.']);
        } else {
            //Get Old picture
            $oldPicture = Users::find(Auth::user()->id)->getAttributes()['picture'];

            if ($oldPicture != '') {
                if (\File::exists(public_path($path . $oldPicture))) {
                    \File::delete(public_path($path . $oldPicture));
                }
            }

            //Update DB
            $update = Users::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$upload) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile picture has been updated successfully']);
            }
        }
    }


    function changePassword(Request $request)
    {
        //Validate form
        $validator = \Validator::make($request->all(), [
            'oldpassword' => [
                'required', function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::user()->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:8|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Enter your current password',
            'oldpassword.min' => 'Old password must have atleast 8 characters',
            'oldpassword.max' => 'Old password must not be greater than 30 characters',
            'newpassword.required' => 'Enter new password',
            'newpassword.min' => 'New password must have atleast 8 characters',
            'newpassword.max' => 'New password must not be greater than 30 characters',
            'cnewpassword.required' => 'ReEnter your new password',
            'cnewpassword.same' => 'New password and Confirm new password must match'
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $update = Users::find(Auth::user()->id)->update(['password' => \Hash::make($request->newpassword)]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, Failed to update password in db']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your password has been changed successfully']);
            }
        }
    }

    function viewLogin()
    {

        return view('auth.login');
    }

    public function newsLetterList(Request $request)
    {
        $newsLetters = DB::table('newsletters')->orderBy('id','desc')->paginate(10);
        return view('dashboards.admins.newsletterlist', compact('newsLetters'));
    }
    
    public function contactList(Request $request)
    {
        $contacts = DB::table('contacts')->orderBy('id','desc')->paginate(10);
        return view('dashboards.admins.contactlist', compact('contacts'));
    }
}
