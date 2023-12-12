<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/Users/getList',[UserController::class,'getList']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
