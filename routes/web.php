<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Auth\User;

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
    return view('welcome');
});

// Route::prefix('admin')->group(static function () {
//     Route::view('index', 'index');

//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

// Route::group(['middleware' => ['access'], 'prefix' => 'info'], function () {
//     Route::view('index', 'index');

//     Route::get('/', function () {
//         return view('welcome');
//     });
// });
// Route::resource('userss', UserController::class);
// Route::view('in', 'user');

Route::get('user1', function () {
    $users = User::all();
    dd($users->address->country);
});
