<?php

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


// This is fallback route in Laravel to allow routes to be passed to welocome .blade template
// but route needs to be anything else then starts with api/something
// so home/, contact/ will match but not api/
// we will define also route  api/ where it routs will go only to laravel not vew

Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.\,-]*');

// commad to list all routes in the project
// root@9f7e02406f76:/var/www/bnblaravelvue# php artisan route:list
