<?php

use Illuminate\Support\Facades\Route;

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

// Example Routes
Route::view('/home', 'client.home');
Route::view('/shop', 'client.shop');
Route::view('/empty', 'client.empty');
Route::view('/myaccount', 'client.my-account');
