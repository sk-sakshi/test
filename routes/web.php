<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendmailController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ForgetpwformController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('welcome');
});


// Route::post('login', [FormController::class, 'login']);


Route::get('loginform', function () {
    return view('OTPlogin');
});

Route::get('signup', function () {
    return view('regform');
});

Route::post('multipleemail', [SendmailController::class, 'multipleEmailSend']);

Route::post('loginform', [FormController::class, 'loginform']);

Route::get('regform', function () {
    return view('regform');
});

Route::get('forgetpw', function () {
    return view('forgetpw');
});
Route::post('forgetpw', [ForgetpwformController::class, 'forget']);
Route::post('reset', [ForgetpwformController::class, 'reset']);


Route::post('mailform', [SendmailController::class, 'mailsend']);

//  this  is send multiple email send 
Route::post('multipleemail', [SendmailController::class, 'multipleEmailSend']);

Route::get('exceldata', function () {
    return view('exceldata');
});

Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
//-----Middleware
Route::group(['middleware' => 'anyname'], function() {
    Route::get('registerform', function () {
        return view('registerform');
    });
   
 });

 Route::post('/register',[DemoController::class,'register']);
 Route::post('formlogin',[DemoController::class,'formlogin']);
 Route::get('formlogout',[DemoController::class,'formlogout']);

 // CRUD FORMS

 Route::get('crudform',function (){
 return view('crudform');
 });
 Route::post('insertdata',[CrudController::class,'crudinsert']);
 Route::get('display',[CrudController::class,'show']);
 Route::get('delete/{id}',[CrudController::class,'delete']);
 Route::get('edit/{id}',[CrudController::class,'update']);
 Route::post('update/{id}',[CrudController::class,'edit']);


