<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
|
toDO:
    Create two final ends for your application:
    api/posts/{user_id}: it will return the contents of all the posts that belong to the user with the id user_id. The posts will be sorted using the alphabetical order of the title.
    api/posts/recent: it will return the contents of the latest 12 posts sorted using the created_at timestamp.
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts/{usuario}', [ApiUserController::class , 'usuarioPostsIndex']);
Route::get('/recents/posts/{usuario}', [ApiUserController::class , 'twelveRecentPosts']);

