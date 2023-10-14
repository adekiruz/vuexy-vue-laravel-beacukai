<?php

use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('refresh-token', [AuthController::class, 'register']);

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
    });
});

// Route::post('/auth/login', function () {
//     return response()->json([
//         'accessToken'  => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiaWF0IjoxNjk3MTMzMjQyLCJleHAiOjE2OTcxMzM4NDJ9.BjpToP8jyi_w7WIzbuZ_5o53xZW1juwAklynC2Kvdck",
//         'refreshToken' => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiaWF0IjoxNjk3MTMzMjQyLCJleHAiOjE2OTcxMzM4NDJ9.GJXjIwI9Po_fwO9UAlVkhf_7Uzb7HAuMqXkepQe4nRo",
//         "userData"     => [
//             "id"       => 1,
//             "fullName" => "John Doe",
//             "username" => "johndoe",
//             "avatar"   => "/images/_/_/_/_/laravel-vue/resources/js/src/assets/images/avatars/13-small.png",
//             "email"    => "admin@demo.com",
//             "role"     => "admin",
//             "ability"  => [
//                 [
//                     "action"  => "manage",
//                     "subject" => "all"
//                 ]
//             ],
//             "extras"   => [
//                 "eCommerceCartItemsCount" => 5
//             ]
//         ]
//     ]);
// });