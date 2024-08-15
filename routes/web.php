<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// admin
Route::get('/admin1',[AdminController::class,'index']);
Route::get('/adminslider',[AdminController::class,'slider']);
Route::post('/addslider',[AdminController::class,'addslider']);
Route::get('/editslider/{id}',[AdminController::class,'editslider']);
// 
Route::get('/abouts',[AdminController::class, 'abouts'])->name('abouts');
Route::post('/addabouts',[AdminController::class, 'addabouts']);
Route::get('/editabouts/{id}',[AdminController::class, 'editabouts']);
Route::get('/deleteabouts/{id}',[AdminController::class, 'deleteabouts']);
Route::post('/updatedabouts/{id}',[AdminController::class, 'updatedabouts']);
// 
Route::get('/offer',[AdminController::class, 'offer'])->name('offer');
Route::post('/addoffer',[AdminController::class, 'addoffer']);
Route::get('/editoffer/{id}',[AdminController::class, 'editoffer']);
Route::post('/updatedoffer/{id}',[AdminController::class, 'updatedoffer']);
Route::get('/deleteoffer/{id}',[AdminController::class, 'deleteoffer']);
// 
Route::get('/blogs',[AdminController::class, 'blogs'])->name('blogs');
Route::post('/addblogs',[AdminController::class, 'addblogs']);
Route::get('/editblogs/{id}',[AdminController::class, 'editblogs']);
Route::post('/updatedblogs/{id}',[AdminController::class, 'updatedblogs']);
Route::get('/deleteblogs/{id}',[AdminController::class, 'deleteblogs']);
// 
Route::get('/contactus',[AdminController::class, 'contactus'])->name('contactus');
Route::post('/addcontact',[AdminController::class, 'addcontact']);
Route::get('/deletecontact/{id}',[AdminController::class, 'deletecontact']);



















// customer
Route::get('/',[MainController::class,'index']);
Route::get('/about',[MainController::class,'about']);
Route::get('/coffees',[MainController::class,'coffees']);
Route::get('/blog',[MainController::class,'blog']);
Route::get('/contact',[MainController::class,'contact']);
Route::get('/login',[MainController::class,'login']);
Route::get('/register',[MainController::class,'register']);
Route::post('/registerUser',[MainController::class,'registerUser']);
Route::post('/loginUser',[MainController::class,'loginUser']);
Route::get('/logout',[MainController::class,'logout']);









