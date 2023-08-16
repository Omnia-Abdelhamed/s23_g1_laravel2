<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeContoller;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('employees/archive',[EmployeeContoller::class,'archive'])->name('employees.archive');
    Route::post('employees/restore/{employee}',[EmployeeContoller::class,'restore'])->name("employees.restore");
    Route::delete('employees/deleteArchive/{employee}',[EmployeeContoller::class,'deleteArchive'])->name("employees.deleteArchive");
    Route::resources([
        'employees'=>EmployeeContoller::class,
        'departments'=>DepartmentController::class,
        'projects'=>ProjectController::class,
    ]);

});
