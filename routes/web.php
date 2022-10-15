<?php

use App\Http\Controllers\VisiController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    $request = Request::create('api/v1/visis/1', 'GET');
    $request->headers->set('Accept', 'application/vnd.api+json');
    $response = Route::dispatch($request)->getContent();
    // $response = app()->handle($request)->getContent();
    $response = json_decode($response, true);
    $a = gettype($response);
    // dd($response);
    // dd(json_decode($response->getContent()));
    // $response = Http::get('http://localhost:8000/user');
    return view('welcome', compact('response'));
});

Route::get('/user', function () {
    return view('layout.layoutUser');
});

Route::resource('visis', VisiController::class);
