<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SubjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('feedback',[FeedbackController::class,'createt']);
Route::get('course',[CoursesController::class,'index']);
Route::get('hobbies',[CoursesController::class,'hobbies']);
Route::get('subject/{id}',[SubjectsController::class,'subject']);
Route::get('faculty/{id}',[FacultiesController::class,'fcty']);
Route::post('noetic/list',[FeedbackController::class,'list']);
Route::post('noetic/update',[FeedbackController::class,'update']);
Route::post('noetic/ditemte',[FeedbackController::class,'delete']);


