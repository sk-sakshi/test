<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function crudinsert(Request $req){
        $insert= new Crud;
        $insert->name=$req->name;
        $insert->email=$req->email;
        $insert->password=$req->password;
        $insert->course=$req->course;
        $insert->city=$req->city;
        $insert->date_of_birth=$req->date_of_birth;
        $insert->number=$req->number;
        $var=$insert->save();
        if($var){
            return redirect()->back()->with('message','data insert successfully');
            }else{
                return redirect()->back()->with('error','data not insert successfully');
            }
        }

// all data show
public function show(Request $req){
    $crud= Crud::all();
    return view('display',['abc'=>$crud]);
}

// delete data
public function delete($id){
    $var=Crud::find($id);
    $var->delete();
    return redirect('display');
}
// get Update data
public function update($id){
    $var=Crud::find($id);
    return view('edit',['xyz'=>$var]);

}
// post update data
public function edit(Request $req ,$id){
    $insert=Crud::find($id);
    $insert->name=$req->name;
    $insert->email=$req->email;
    $insert->password=$req->password;
    $insert->course=$req->course;
    $insert->city=$req->city;
    $insert->date_of_birth=$req->date_of_birth;
    $insert->number=$req->number;
    $var=$insert->update();
    if($var){
        return redirect('/display')->with('message','Update successfully');
        }else{
            return redirect()->back()->with('error','update not successfully');
        }
    }






}

