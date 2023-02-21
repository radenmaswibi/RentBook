<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\MessageCatalogue;

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


// main
Route::get('/main', function () {
    return view('layouts.main');
});
// Route Dashboard
Route::get('/book', function () {
    return view('dashboard.book');
});
Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/index', function () {
    return view('dashboard.index');
});
Route::get('/rent-log', function () {
    return view('dashboard.rent-log');
});
// Route::get('/user', function () {
//     return view('dashboard.user');
// });

Route::middleware(['admin'])->group(function () {
    
    Route::get('/user',[AdminController::class,'index'])->name('user');
        
    Route::get('/edituser/{id}' , [AdminController::class, 'editUser'])->name('editUser');
    Route::post('/updateUser/{id}' , [AdminController::class, 'updateUser'])->name('updateUser');
    Route::post('/deleteUser/{id}' , [AdminController::class, 'deleteUser'])->name('deleteUser');
        
    Route::get('/dashboard-user', [UserController::class, 'index'])->name('dashboard-user');
        
});
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('/index',[AdminController::class,'dashboardIndex'])->name('dashboardIndex');


});

Route::middleware(['guest'])->group(function () {
    // route register
    Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
    Route::post('/store', [AuthController::class, 'storeRegister'])->name('store');
    //route login
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'storeLogin'])->name('storeLogin');
    // route message
    Route::post('/', [MessageController::class, 'storeMessage'])->name('storeMessage');
});
    
