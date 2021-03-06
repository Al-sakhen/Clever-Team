<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\yearsController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\detailsController;

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
// home controller
Route::get('/', [homeController::class, 'index']);
Route::get('/index', [homeController::class, 'index']);

Route::get('/years/{id}', [homeController::class, 'Year']);

Route::get('/subject/{year_id}/{id}', [homeController::class, 'course_details']);


Route::get('download/{file_path}', [homeController::class, 'download']);

Route::get('contact_us', [homeController::class, 'contact']);



//  -----------------admin controller ----------------------
Route::get('/register', [adminController::class, 'register']);
Route::post('/postregister', [adminController::class, 'postregister']);

Route::get('/login', [adminController::class, 'login'])->name('login');
Route::post('/postlogin', [adminController::class, 'postlogin']);

Route::get('/logout', [adminController::class, 'logout']);

//  -----------------year controller ----------------------
Route::get('/dashboard/years', [yearsController::class, 'view'])->middleware('auth')->name('dashboard');

Route::get('/dashboard/year/updateyear/{id}', [yearsController::class, 'updateYear']);
Route::post('/dashboard/year/postupdateyear', [yearsController::class, 'postUpdateYear']);




//  -----------------courses controller ----------------------
Route::get('/dashboard', [adminController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/{year_id}', [coursesController::class, 'courses']);

Route::get('/dashboard/courses/addcourse', [coursesController::class, 'InsertCourse']);
Route::post('/dashboard/courses/postcourse', [coursesController::class, 'PostInsertCourse']);

Route::get('dashboard/delete/{id}', [coursesController::class, 'deleteCourse']);

Route::get('/dashboard/courses/updatecourse/{id}', [coursesController::class, 'showCourse']);
Route::post('/dashboard/courses/updatecourse', [coursesController::class, 'updateCourse']);




//  -----------------details controller ----------------------
Route::get('/dashboard/course/details/{course_id}', [detailsController::class, 'view']);

Route::get('/dashboard/cousrse/add/{course_id}', [detailsController::class, 'insert']);
Route::post('/dashboard/courses/postinsert', [detailsController::class, 'postInsert']);

Route::get('/dashboard/material/update/{course_id}', [detailsController::class, 'update']);
Route::post('/dashboard/material/postupdate', [detailsController::class, 'postUpdate']);

Route::get('dashboard/detail/delete/{id}', [detailsController::class, 'delete']);
