<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


    //image upload
    Route::post('/image/upload', [ImageController::class, 'store'])->name('image.upload');
    Route::post('/media/{post}', [ImageController::class, 'getImages'])->name('post.images');

    Route::group(['prefix'=>'paypal'], function(){
        Route::post('/order/create', [PaymentController\Paypal::class, 'create']);
        Route::post('/order/capture', [PaymentController\Paypal::class, 'capture']);
    });
