<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UpdateController;
// use App\Models\Auth;
use Illuminate\Support\Facades\Route;

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




Route::get('/', [FrontendController::class, 'welcome']);
// Route::get('/blog',[FrontendController::class,'Blog']);
Route::get('/description',[FrontendController::class,'Description']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' =>["auth","admin"]],function(){
Route::get('/blog',[FrontendController::class,'Blog']);
Route::get('/addBlog',[FrontendController::class,'AddBlog']);
Route::get('/addItem',[FrontendController::class,'AddItem']);
Route::get('/addBlog',[UpdateController::class,'index']);
Route::post('/create',[UpdateController::class,'Create']);
Route::get('/delete-blog/{id}',[UpdateController::class,'Delete']);
Route::get('/edit/{id}',[UpdateController::class,'Edit']);
Route::post('/edit-blog/{id}',[UpdateController::class,'EditBlog']);

});