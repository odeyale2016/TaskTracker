<?php

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
Route::get('newsletter',[
    'uses'=>'NewsLetterController@create',
    'as'=>'newsletter'
]);
Route::post('apply',[
    'uses'=>'NewsLetterController@store',
    'as'=>'apply'
]);

Auth::routes();
Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/tasks', 'TasksController');
Route::resource('admin/projects', 'ProjectsController');
Route::get('/dashboard', 'DashboardController@index');
 Route::get('/admin',function(){

return view('admin.index');
});