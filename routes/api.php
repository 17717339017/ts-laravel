<?php

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;
//
///*
//|--------------------------------------------------------------------------
//| API Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register API routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| is assigned the "api" middleware group. Enjoy building your API!
//|
//*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');

    $api->version('v1', function ($api) {
        $api->get('test', '\App\Http\Controllers\TestController@index');
        //
        $api->get('name', ['as' => "test.name", 'uses' => '\App\Http\Controllers\TestController@name']);
    });

    $api->version('v2', function ($api) {

    });

