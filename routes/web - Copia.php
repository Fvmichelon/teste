<?php

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

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Admin\CKEditorController;
use App\Http\Controllers\Site\TranslateController;
use App\Http\Controllers\Site\FormController;
use App\Mail\SendContact;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Site\EmailController;
use App\Http\Controllers\Site\NewsletterController;




use Illuminate\Support\Facades\Route;

Route::get('translate/{language}', [TranslateController::class, 'index'])->name("translate");

Route::middleware('localization')->group(function(){

    Route::get('', [HomeController::class, 'index'])->name("home");
    Route::post('ck/upload', [CKEditorController::class,'ckUpload'])->name('ck.upload');

});


Route::post('send-email', [EmailController::class, 'sendEmail'])->name("route-send-email");

Route::post('register-newsletter', [NewsletterController::class, 'add_to_newsletter'])->name("route-add-newsletter");

