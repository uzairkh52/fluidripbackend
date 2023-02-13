<?php
use App\Http\Controllers\WebUserController;
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

// Route::POST("login", [WebUserController::class, "LoginClass"]);
Route::POST("login", [WebUserController::class, "LoginClass"]);
Route::POST("register", [WebUserController::class, "RegisterClass"]);
Route::get("backend/users", [WebUserController::class, "ShowUserClass"]);
Route::get('/greeting', function () {
    return 'Hello World';
});