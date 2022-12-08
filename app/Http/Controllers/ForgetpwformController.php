<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forgetpwform;
use Mail;

class ForgetpwformController extends Controller
{
    public function forget(Request $req){
       
        $res = Forgetpwform::where('email', $req->email)->first();
        if($res){
            if($req->password==$res->password){
                return redirect('regform');
            }
            else{
                echo 'Email or passowrd not match';
            }
        }
      
      
    }

    public function reset(Request $req){

        $otp = rand(10000,999999);
        $email=$req->email;
        $res = Forgetpwform::where('email', $req->email)->update(['password' => $otp]);
        $data=['otp'=>$otp];
        Mail::send('mail', $data, function ($message) use ($email) {
           $message->from('sakshikatiyar2129@gmail.com', 'Sakshi');
           $message->subject("Reset password");
            $message->to($email);
       });
       if($res){
        return redirect()->back()->with('msg','OTP send your email');
        }else{
            return redirect()->back()->with('wrong','Not Send OTP');
        }

    } 

    function login(Request $req){


    }
}
