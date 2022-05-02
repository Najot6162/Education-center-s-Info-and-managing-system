<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CoursesController;
use \App\Http\Controllers\FutureController;
use \App\Http\Controllers\TeacherController;
use \App\Http\Controllers\EventsController;
use \App\Http\Controllers\TeachController;
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

Auth::routes();
Route::group(['middleware' => ['auth:sanctum']],function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('posts', PostController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('futures', FutureController::class);
    Route::resource('teachs', \App\Http\Controllers\TeachersController::class);
    Route::resource('event', \App\Http\Controllers\EventController::class);
    Route::resource('eventlist', \App\Http\Controllers\EventListController::class);
    Route::get('/home', [PostController::class, 'index'])->name('home');
    Route::post('/logout',);
    Route::put('update', [\App\Http\Controllers\ProfileController::class,'update'])->name('profile.update');
    Route::get('edit', [\App\Http\Controllers\ProfileController::class,'edit'])->name('profile.edit');
});

Route::get('index', [CoursesController::class, 'index'])->name('index');
Route::get('future-event', [EventsController::class, 'index'])->name('future-event');
Route::get('teach', [TeachController::class, 'index'])->name('teach');



Route::get('/', function () {
    return view('/pages/home');
});
Route::get('/', function () {
    return view('/pages/home');
});
Route::get('/course', function () {
    return view('/pages/course');
});
Route::get('/teachers', function () {
    return view('/pages/teachers');
});
Route::get('/events', function () {
    return view('/pages/event');
});
Route::get('/about', function () {
    return view('/pages/about');
});
Route::get('/gallery', function () {
    return view('/pages/gallery');
});
Route::get('/contact', function () {
    return view('/pages/contact');
});



//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
