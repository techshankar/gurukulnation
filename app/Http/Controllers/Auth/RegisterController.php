<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Users;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'favoriteColor'=>'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'role'=>2,
    //         'favoriteColor'=>$data['favoriteColor'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    function register(Request $request){

         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'favoriteColor'=>'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
         ]);

         /** Make avata */

         $path = 'users/images/';
         $fontPath = public_path('fonts/Oliciy.ttf');
         $char = strtoupper($request->name[0]);
         $newAvatarName = rand(12,34353).time().'_avatar.png';
         $dest = $path.$newAvatarName;

         $createAvatar = makeAvatar($fontPath,$dest,$char);
         $picture = $createAvatar == true ? $newAvatarName : '';

         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->role = 2;
         $user->favoriteColor = $request->favoriteColor;
         $user->picture = $picture;
         $user->password = \Hash::make($request->password);

         if( $user->save() ){

            return redirect()->back()->with('success','You are now successfully registerd');
         }else{
             return redirect()->back()->with('error','Failed to register');
         }

    }


    public function userSignupSaved(Request $request){
        $request->validate([
            'name' => ['required',],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8'],
         ]);

         $user = new Users();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->state = $request->state;
         $user->user_status = 1;
         if($request->referral_code){
             $user->referred_by_code = $request->referral_code;
         }
            // BRC: Course Bundle refferel code
         $user->my_refere_code = "CBRC".rand(9,999999);
         $user->bundle_id = $request->course_id;
         $user->role_id = 1;
         $user->password = \Hash::make($request->password);

         if( $user->save() ){

            return redirect('user/signin')->with('success','Registered successfully. Now you can login.');
         }else{
             return redirect()->back()->with('error','Failed to register');
         }

    }


    public function signIn(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role_id == 1) {

                return redirect()->route('/');
            }
        } else {
            return redirect()->route('user.signin')->with('error', 'Email or password is wrong');
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('user/signin');
    }
    
    public function resetPasswordSendEmail(Request $request)
    {
        dd($request->all());
    }


}
