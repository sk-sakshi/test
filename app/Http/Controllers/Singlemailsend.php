<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sendmail;
use Mail;
use Hash;

class SendmailController extends Controller
{

   public function mailsend(Request $req){
     $insert = new Sendmail;
    $dataThis=Hash::make($req->password);
    $insert->first_name=$req->first_name;
    $insert->last_name=$req->last_name;
    $insert->email=$req->email;
    $insert->password=$dataThis;
    $insert->number=$req->number;
    $sql=$insert->save();

    $email=$req->email;

    $data=['first_name'=> $req->first_name,'last_name'=>$req->last_name,'email'=>$req->email,'number'=>$req->number,'password'=>$dataThis];
Mail::send('mail', $data, function ($message) use ($email) {
        $message->from('sakshikatiyar2129@gmail.com', 'Sakshi');
        $message->subject("Registration form");
        $message->to($email);
    });
    if($sql){
    return redirect()->back()->with('message','data insert successfully');
    }else{
        return redirect()->back()->with('error','data not insert successfully');
    }
}
}