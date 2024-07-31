<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\AlbumController;
use App\Http\Controllers\Api\V1\TrackController;

$index = 'index';
$show = 'show';
$store = 'store';
$update = 'update';
$destroy = 'destroy';

$album = '/album';
$track = '/track';
$albumId = '/album/{id}';
$trackId = '/track/{id}';
$search = '/album/search?name={title}';

Route::get($album, [AlbumController::class, $index]);
Route::get($albumId, [AlbumController::class, $show]);
Route::get($search, [AlbumController::class, 'search']);
Route::post($album, [AlbumController::class, $store]);
Route::put($albumId, [AlbumController::class, $update]);
Route::delete($albumId, [AlbumController::class, $destroy]);

Route::get($track, [TrackController::class, $index]);
Route::get($trackId, [TrackController::class, $show]);
Route::post($track, [TrackController::class, $store]);
Route::put($trackId, [TrackController::class, $update]);
Route::delete($trackId, [TrackController::class, $destroy]);
