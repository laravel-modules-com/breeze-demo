<?php

use Illuminate\Support\Facades\Route;
use Modules\Module5\Http\Controllers\Module5Controller;

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

Route::group([], function () {
    Route::resource('module5', Module5Controller::class)->names('module5');
});
