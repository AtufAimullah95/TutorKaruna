<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
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


Route::get('/',[RestoController::class, 'index']);

Route::prefix('user')->group(function () {
    Route::get('create',[RestoController::class, 'addUser']);
    Route::post('save',[RestoController::class, 'saveUser']);
    //user/view /1
    Route::get('view/{id}',[RestoController::class, 'viewUser']);
    //user/edit/1
    Route::get('edit/{id}',[RestoController::class, 'editUser']);
    //user/delete/1
    Route::get('delete/{id}',[RestoController::class, 'deleteUser']);
    //user/saveEdit/1
    Route::post('saveEdit/{id}',[RestoController::class, 'saveEdit']);
    //search
    Route::post('search',[RestoController::class, 'searchUser']);
}); 



