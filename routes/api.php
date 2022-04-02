<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users/{userid}/webinars?',[\App\Http\Controllers\WrapperAPI::class,'listwebinars'])
    ->middleware(middleware\App\Http\Middleware\NpmMiddleware::class)
    ->name('listwebinars');
Route::get('/users/:userid',[\App\Http\Controllers\WrapperAPI::class,'retrieveauser'])
    ->middleware(middleware\App\Http\Middleware\NpmMiddleware::class)
    ->name('retrieveauser');
Route::get('/users/:userid/recordings?',[\App\Http\Controllers\WrapperAPI::class,'listortherecordings'])
    ->middleware(middleware\App\Http\Middleware\NpmMiddleware::class)
    ->name('listortherecordings');
Route::get('/users/:userid/permissions',[\App\Http\Controllers\WrapperAPI::class,'retrieveauserspermissions'])
    ->middleware(middleware\App\Http\Middleware\NpmMiddleware::class)
    ->name('retrieveauserspermissions');
Route::get('/users/:userid/pac',[\App\Http\Controllers\WrapperAPI::class,'listusersPACaccounts'])
    ->middleware(middleware\App\Http\Middleware\NpmMiddleware::class)
    ->name('listusersPACaccounts');


Route::get('/users/:userid/identitas', function(){
    return [
        'code' => '0', 
        'data' =>[
            'npm' => '197006049',
            'nama' => 'Putri Salha Nadia',
            'email' => '197006049@student.unsil.ac.id'
        ]
        ];

})  ->middleware(middleware\App\Http\Middleware\NpmMiddleware::class);

    