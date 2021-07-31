<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allcoursecontroller;
use App\Http\Controllers\entrollcontroller;
use Illuminate\Support\Facades\Auth;
use App\Mail;
use App\Mail\entrollmentmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::get('/', function () {
    Mail::to('selva@oddcounts.com')->send(new entrollmentmail);
    return view('welcome');
});

Route::get('get_course', [allcoursecontroller::class, 'get_all']);
Route::get('get_add_course', [allcoursecontroller::class, 'get_add_course']);
Route::get('get_tags', [allcoursecontroller::class, 'get_tags']);
Route::get('get_categories', [allcoursecontroller::class, 'get_categories']);
Route::get('get', [allcoursecontroller::class, 'get']);
Route::Post('insert', [allcoursecontroller::class, 'course_data_add']);
Route::Post('add_categories', [allcoursecontroller::class, 'put_categories_name']);
Route::Post('add_tags', [allcoursecontroller::class, 'put_tags_name']);
Route::get('edit_course/{id}',[allcoursecontroller::class, 'edit_course']);
Route::Post('update_course/{id}',[allcoursecontroller::class, 'update_course']);
Route::get('delete_course/{id}',[allcoursecontroller::class, 'delete_course']);
Route::get('delete_categories/{id}',[allcoursecontroller::class, 'delete_categories']);
Route::get('edit_categories/{id}',[allcoursecontroller::class, 'edit_categories']);
Route::get('delete_tags/{id}',[allcoursecontroller::class, 'delete_tags']);
Route::get('edit_tags/{id}',[allcoursecontroller::class, 'edit_tags']);
Route::Post('update_tags/{id}',[allcoursecontroller::class, 'update_tags']); 
Route::Post('update_categories/{id}',[allcoursecontroller::class, 'update_categories']);
Route::get('allgallery',[allcoursecontroller::class, 'gallery']);
Route::Post('add_img',[allcoursecontroller::class, 'add_gallery']);
Route::get('edit_gallery/{id}',[allcoursecontroller::class, 'edit_gallery']);
Route::get('delete_gallery/{id}',[allcoursecontroller::class, 'delete_galley']);
Route::Post('update_gallery/{id}',[allcoursecontroller::class, 'update_gallery']);
Route::Post('get_search',[allcoursecontroller::class, 'get_search']);
Route::get('allpartner',[allcoursecontroller::class, 'allpartner']);
Route::get('addpartner',[allcoursecontroller::class, 'addpartner']);
Route::post('partner_datail_insert',[allcoursecontroller::class, 'partner_datail_insert']);
Route::get('partner_detail/{id}',[allcoursecontroller::class, 'partner_detail']);
Route::get('edit_partner_details/{id}',[allcoursecontroller::class, 'edit_partner_details']);
Route::Post('update_partner_details/{id}',[allcoursecontroller::class, 'update_partner_details']);
Route::get('partner_delete/{id}',[allcoursecontroller::class, 'partner_delete']);
Route::get('partner_dashboard',[allcoursecontroller::class, 'partner_dashboard']);
Route::get('all_entrollment',[entrollcontroller::class, 'all_entrollment']);
Route::get('addOrder',[entrollcontroller::class, 'addOrder']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// excel import export code functionality start to here
Route::Post('/excelimport', [allcoursecontroller::class, 'import_excel']);
Route::Post('/excelexprot', [allcoursecontroller::class, 'export_excel']);

// excel import export code functionality end to here