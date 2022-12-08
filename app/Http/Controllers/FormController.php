<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class FormController extends Controller
{
    public function loginform(Request $req){
       
    $insert= new Login;
    $insert->email=$req->email;
    $insert->password=$req->password;
    $sql=$insert->save();
    if($sql){
        return redirect()->back()->with('message','data insert successfully');
        }else{
            return redirect()->back()->with('error','data not insert successfully');
        }
    }
}
