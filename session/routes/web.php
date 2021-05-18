<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/session/get',[sessionController::class,'get_session_data'])->name('session.get');

Route::get('/session/set',[sessionController::class,'set_session_data'])->name('session.store');

Route::get('/session/delete',[sessionController::class,'delete_session_data'])->name('session.delete');