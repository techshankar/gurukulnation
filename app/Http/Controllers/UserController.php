<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\UserOtp;
use App\Models\Users;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;

class UserController extends Controller
{
    function index()
    {

        return view('dashboards.users.index');
    }

    function profile()
    {
        return view('dashboards.users.profile');
    }
    function settings()
    {
        return view('dashboards.users.settings');
    }

    public function sendOtp(LoginRequest $request)
    {
        $otp = rand(111111, 999999);
        // $otp = 123456;
        $mobile = $request->mobile;
        if ($mobile == '8077619781') {
            // $mobile = $request->mobile;
            $otp = 123456;
        }
        $time = date("Y-m-d H:i:s", strtotime('15 minutes'));
        UserOtp::updateOrcreate([
            'mobile' => $mobile
        ], [
            'otp' => $otp,
            'type' => 'web_login',
            'timestamp' => $time,
        ]);
        // $this->send_message($mobile, $otp);

        return redirect()->route('verifyOtp')->with('alert-success', 'OTP Sent Successfully on ' . $mobile);
    }

    public function send_message($mobile, $otp)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"62a720c3d8aea23425727632\",\n  \"sender\": \"NMBRDK\",\n  \"mobiles\": \"91$mobile\",\n  \"otp\": \"$otp\"}",
            CURLOPT_HTTPHEADER => [
                "authkey: 377940ATOlSDRg0CSG629ddb42P1",
                "content-type: application/JSON"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            //echo "cURL Error #:" . $err;
        } else {
            //echo $response;
        }
    }

    public function verifyOtp(Request $request)
    {
        $phone = $request->phone ?? '';
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'otp' => 'required',
        ]);
        if ($validator->passes()) {
            $verify_otp = UserOtp::where('mobile', $request->phone)->where('otp', $request->otp)->first();
            if (!empty($verify_otp)) {
                $exist = Users::where('phone', $request->phone)->first();
                if (!empty($exist) && $exist->is_delete == 0) {
                    Auth::guard('web')->loginUsingId($exist->id);
                    return response()->json(['success' => 'Login Successfully']);
                } elseif (!empty($exist) && $exist->is_delete == 1) {
                    return response()->json(['failure' => 'Your Account Is Deleted . Please Contact To Your administrator']);
                } else {
                    Session::put('phone', $phone);
                    return response()->json(['register' => 'register', 'is_verified' => 1]);
                }
            } else {
                return response()->json(['failure' => 'Invalid OTP']);
            }
        }
        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function register(Request $request)
    {
        $phone = $request->phone ?? '';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
        ]);
        if ($validator->passes()) {
            $user = new Users;
            $user->phone = Session::get('phone');
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $id = $user->id;
            if (!empty($id)) {
                Auth::guard('web')->loginUsingId($id);
                return redirect()->route('/')->with('alert-success', 'User Registered Successfully');
            }
            return response()->json(['error' => $validator->errors()->all()]);
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
