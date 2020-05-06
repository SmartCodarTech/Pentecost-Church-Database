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
    return view('home');
})->middleware('auth');

Auth::routes();
Route::get('admin/routes', 'HomeController@admin')->name('admin.dashboard')->middleware('is_admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('system-management/users','UsersManagementController');
Route::resource('system-management/regions','RegionsManagementController');
Route::resource('system-management/country','CountryManagementController');
Route::resource('system-management/members','MembersManagementController');
Route::resource('system-management/group','GroupManagementController');
Route::resource('system-management/groups','DivisionsManagementController');
Route::resource('system-management/cells','CellsManagementController');
Route::resource('system-management/roles','RolesManagementController');
Route::resource('system-management/category','CategoriesManagementController');
Route::resource('system-management/users','UserManagementController');
Route::resource('dashboard','DashboardController');
Route::get('avatars/{name}', 'MembersManagementController@load');

