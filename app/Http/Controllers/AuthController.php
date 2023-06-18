<?php

namespace App\Http\Controllers;

use App\Events\EmailVerificationEvent;
use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(Request $request)
    {
        $request->validate([
            "name" => "required|min:10",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:8",
            "confirm_password" => "required|same:password"
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
        $request->session()->put('verify-email',$request->email);

        event(new EmailVerificationEvent($user));

        return redirect('/verify-email');
    }

    function login(Request $request){
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where('email',$request->email)->first();

        if(User::where('email',$request->email)->count()===0){
            return redirect()->back()->withErrors(['email' => 'Email not Found'])->withInput();
        }

        if(Hash::check($request->password,$user->password)){
            if($user->hasVerifiedEmail()) {
                Auth::loginUsingId($user->id,true);

                return redirect('/');
            }else{
                event(new EmailVerificationEvent($user));

                $request->session()->put('verify-email',$request->email);

                return redirect('/verify-email');
            }
        }else{
            return redirect()->back()->withErrors(['password' => 'Password Incorrect'])->withInput();
        }
    }

    function verify_email(Request $request)
    {
        $email = $request->session()->get('verify-email');
        $user = User::where('email',$email)->first();

        $request->validate([
            "code" => "required"
        ]);
        $code = $request->code;

        $otp = Otp::where('otp',$code)->where('email',$email)->where('attempt','email-verification')->first();

        if($otp){
            if((int)$code===$otp->otp){
                if(Carbon::now()->isBefore(Carbon::parse($otp->expires_at))){

                    User::where(["id" => $user->id])->update([
                        "email_verified_at" => Carbon::now()
                    ]);

                    Otp::where('otp',$code)->where('email',$email)->update([
                        "expires_at" => Carbon::now()
                    ]);

                    $request->session()->forget('verify-email');

                    return redirect('/signin')->with('verify-succes','Email Verification Succesful');
                }else{
                    return redirect()->back()->withErrors([
                        "code" => "OTP Expired"
                    ])->withInput();
                }
            }else{
                return redirect()->back()->withErrors([
                    "code" => "Invalid OTP"
                ])->withInput();
            }
        }else{
            return redirect()->back()->withErrors([
                "code" => "Invalid OTP"
            ])->withInput();
        }
    }

    function verify_email_view(Request $request)
    {
        if($request->session()->get('verify-email')){
            $email = $request->session()->get('verify-email');

            return view('page.otp-verify-email',[
                "email" => $email
            ]);
        }

        return redirect('signup');
    }

    function logout(){
        Auth::logout();

        return redirect('/');
    }

    function admin_login_view(Request $request){
        if($request->session()->get('admin_auth')){
            return redirect('/admin');
        }

        return view('admin.pages.login');
    }

    function admin_login(Request $request){
        $request->session()->put('admin_auth',true);

        return redirect('/admin');
    }

    function admin_logout(Request $request){
        $request->session()->forget('admin_auth');

        return redirect('/admin/login');
    }
}
