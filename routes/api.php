<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;

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

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('visis', JsonApiController::class);
    // ->readOnly();
    // ->only('index', 'show', 'store', 'update');
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('misis', JsonApiController::class);
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('tentangs', JsonApiController::class);
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('tugasfungsis', JsonApiController::class);
});


JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('strukturppids', JsonApiController::class);
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('kontaks', JsonApiController::class);
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('informasipubliks', JsonApiController::class);
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('faqs', JsonApiController::class);
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('faqs', JsonApiController::class);
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('regulasis', JsonApiController::class);
});
