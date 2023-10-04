<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BatchController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::controller( TeacherController::class )->group( function () {
    Route::get( '/teacher', 'index' )->name( 'teacher.index' );
    Route::post( '/teacher', 'teacherRegistration' )->name( 'teacher.registration' );
} );
Route::controller( BatchController::class )->group( function () {
    Route::get( '/batch', 'create' )->name( 'batch.index' );
    Route::post( '/batch', 'batchCreate' )->name( 'batch.create' );
} );

Route::controller( RoleController::class )->group( function () {
    Route::get( '/role/create', 'create' )->name( 'role.create' );
    Route::post( '/role/store', 'store' )->name( 'role.store' );
} );

Route::controller( UserController::class )->group( function () {
    Route::get( '/user/create', 'create' )->name( 'user.create' );
    Route::post( '/user/store', 'store' )->name( 'user.store' );
} );
Route::controller( CourseController::class )->group( function () {
    Route::get( '/course/create', 'create' )->name( 'course.create' );
    Route::post( '/course/store', 'store' )->name( 'course.store' );
} );
