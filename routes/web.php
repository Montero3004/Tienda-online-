<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminloginController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\Categoria;
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



    Route::group(['prefix'=>'admin'], function(){

    Route::group(['middleware'=>'admin.guest'], function(){
    Route::get('/login',[AdminloginController::class,'index'])->name('admin.login');
    Route::post('/authenticate',[AdminloginController::class,'authenticate'])->name('admin.authenticate');
  
});
     
    Route::group(['middleware'=>'admin.auth'], function(){
    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');  
    Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');
    
    //Rotas de las Categorias
    Route::get('/categoria/create',[Categoria::class,'create'])->name('categoria.create');
  
    });
});