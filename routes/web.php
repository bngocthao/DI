<?php

use App\Http\Controllers\Admin\DonXinVangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NguoiDungController;
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

// Authentication Routes...
Auth::routes([
    'verify' => true
]);
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->get('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified');

Route::resource('admin/users', NguoiDungController::class,[
    'as' => 'admin',
])->middleware('verified');

Route::resource('admin/postponse_req', DonXinVangController::class,[
    'as' => 'admin',
])->middleware('verified');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('home/logout');
