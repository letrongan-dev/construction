<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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


Route::get('/', 'HomeController@index');



//Admin
Route::get('/admins', 'AdminController@index');

// Blog
Route::get('/admin/blog/add', 'BlogController@addBlog');
Route::get('/admin/blogs/', 'BlogController@index');
Route::post('/admin/blog/add','BlogController@postBlog');
Route::get('/changeStatus/{id}', 'BlogController@activeBlog');
Route::get('/admin/blog/edit/{id}', 'BlogController@editBlog');
Route::post('/admin/blog/update/{id}', 'BlogController@updateBlog');	
Route::get('/admin/blog/delete/{id}', 'BlogController@deleteBlog');

//Service
Route::get('/admin/services','ServiceController@index');
Route::get('/admin/service/add','ServiceController@add');
Route::post('/admin/service/save','ServiceController@save');
Route::get('/admin/service/edit/{id}', 'ServiceController@edit');
Route::post('/admin/service/update/{id}', 'ServiceController@update');	
Route::get('/admin/service/delete/{id}', 'ServiceController@delete');
Route::get('/activeService/{id}', 'ServiceController@active');

//Project
Route::get('/admin/projects','ProjectController@index');
Route::get('/admin/project/add','ProjectController@add');
Route::post('/admin/project/save','ProjectController@save');
Route::post('/admin/project/update/{id}','ProjectController@update');

//User
Route::get('/admin/users','UserController@index');
Route::post('/admin/user/add','UserController@save');
Route::post('/admin/user/update/{id}','UserController@update');
Route::get('/admin/user/delete/{id}', 'UserController@delete');
