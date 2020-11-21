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
Route::get('/admin/service','ServiceController@index');
Route::get('/admin/service/add','ServiceController@add');
Route::post('/admin/service/save','ServiceController@save');

