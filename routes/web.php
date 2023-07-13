<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MessageTemplateController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', function() {
    return view('upload');
});

Route::post('/upload-file', [FileController::class, 'uploadFile']);

Route::controller(CustomerController::class)->group(function () {
    Route::get('/customers', 'index');
    Route::get('/message-templates', 'getMessageTemplates');
    Route::get('/customers/{id}/send-message', 'sendMessage');
});
