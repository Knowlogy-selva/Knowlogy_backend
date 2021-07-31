<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allcoursecontroller;
use App\Http\Controllers\entrollcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get_course', [entrollcontroller::class, 'get_all']);
Route::get('get_course/{id}', [entrollcontroller::class, 'get_course']);
Route::Post('search',[entrollcontroller::class,'search']);
Route::Post('edit_course/{id}',[entrollcontroller::class,'edit_course']);
Route::Post('payment',[entrollcontroller::class,'payment']);
