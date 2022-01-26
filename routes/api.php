<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\CourseController;


Route::get('courses', [CourseController::class, 'index']);
Route::get('coursestudent/{id}', [CourseController::class, 'course']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);

// Route::get('/home', 'HomeController@index')
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
