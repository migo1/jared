<?php
use Illuminate\Support\Facades\Route;


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dashboard', 'DashboardController');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');


Route::prefix('admin')->group( function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //pasword reset routes
     Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
     Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');     
     Route::post('/password/reset ','Auth\AdminResetPasswordController@reset');           
     Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');     
});

//admins
Route::group(['middleware' => ['auth:admin']], function() {
    Route::resource('roles','RoleController');
    Route::resource('admins','UserController');
});
Route::resource('admin_dashboard', 'Admin\DashboardController');
Route::resource('car_makes', 'CarMakeController');
Route::resource('car_models', 'CarModelController');
Route::resource('model', 'ModelController');
Route::resource('rents', 'RentController');
Route::resource('non_customers', 'NonCustomerRentController');
Route::resource('customers', 'CustomerController');

//customers
Route::resource('makes', 'User\CarMakeController');
Route::resource('models', 'User\CarModelController');