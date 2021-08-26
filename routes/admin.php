<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;

Route::get('admin/login', [LoginController::class, 'show'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::get('admin/logout', [LoginController::class,'logout'])->name('admin.logout');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('admin/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

});




