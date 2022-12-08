<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\UserModel;

class DemoController extends Controller
{
       
    public function formlogin(Request $request)
    {
        $var = UserModel::where('email', $request->email)->first();
        
        if ($var) {
            $rebid = $var->id;
 
            $match = $var->password == $request->password;
            if ($match) {
                $request->session()->put('reb', $rebid);
 
                return redirect('/registerform');
            } else {
                return redirect()->back()->with('loginfailed', 'username or password is wrong');
            }
        } else {
            return redirect()->back()->with('error', 'username or password is wrong');
        }
    }
    public function register(Request $request)
    {
       $data =  new UserModel;
       $data->name = $request->name;
       $data->email = $request->email;
       $data->password = $request->password;
       $data->about = $request->about;
       $data->phone = $request->phone;
       $data->save();
       return redirect('/login');

    }
 
 public function formlogout(Request $request)
    {
        $request->session()->forget('reb');
        return redirect('/login')->with('logout', 'You have been Logged out!');
    }

}
