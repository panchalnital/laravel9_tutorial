<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\http\Controllers\EmployeeController;
use App\Http\Controllers\EmpController;

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

Route::get('/test/{id}',function($id){
    return view('test',['id'=>$id]);
});

Route::get('/us',function(){
    return view('user');
});

Route::get('/user',[userController::class,'index']);
Route::get('/empolyee/{id}',[employeeController::class,'index']);

Route::get('/emp',[EmpController::class,'index']);