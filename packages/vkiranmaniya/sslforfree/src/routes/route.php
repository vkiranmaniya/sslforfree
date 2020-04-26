<?php

use Illuminate\Support\Facades\Route;

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

foreach(config('sslforfree.verification') as $verification){
    try{
        Route::get('/.well-known/acme-challenge/'.$verification['key'] , function () use ($verification){
            return $verification['value'];
        });
    }catch(Exception $e){
        throw new Exception('Exception handling Route for SSLForFree.', 5409 , $e);
    }
}
