<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeContoller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::middleware('IsLoginAdmin')->group(function(){
    Route::group(['prefix'=>'admin'],function(){
        Route::get('employees/archive',[EmployeeContoller::class,'archive'])->name('employees.archive');
        Route::get('employees/createProjects/{employee}',[EmployeeContoller::class,'createProjects'])->name('employees.createProjects');
        Route::post('employees/restore/{employee}',[EmployeeContoller::class,'restore'])->name("employees.restore");
        Route::post('employees/storeProjects',[EmployeeContoller::class,'storeProjects'])->name("employees.storeProjects");
        Route::delete('employees/deleteArchive/{employee}',[EmployeeContoller::class,'deleteArchive'])->name("employees.deleteArchive");
        Route::resources([
            'employees'=>EmployeeContoller::class,
            'departments'=>DepartmentController::class,
            'projects'=>ProjectController::class,
        ]);

    });
});



Route::middleware('IsLogin')->group(function(){
    Route::get('/class', [HomeController::class,'class'])->name('class');
});



Route::get('/', [HomeController::class,'index'])->name('index');
Route::middleware('IsGuest')->group(function(){
    Route::get('login', [AuthController::class,'login'])->name('login');
    Route::get('register', [AuthController::class,'register'])->name('register');
    Route::post('login', [AuthController::class,'handleLogin'])->name('handleLogin');
});

Route::get('logout', [AuthController::class,'logout'])->name('logout');
Route::post('register', [AuthController::class,'handleRegister'])->name('handleRegister');
