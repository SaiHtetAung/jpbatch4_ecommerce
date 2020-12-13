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

Route::get('/','FrontendController@home')->name('homepage');

Route::get('about','FrontendController@about')->name('aboutpage');

Route::get('post/{id}','FrontendController@post')->name('postpage');

Route::get('contact','FrontendController@contact')->name('contactpage');

Route::get('cart','FrontendController@cart')->name('cartpage');

Route::middleware('role:admin')->group(function () {
  // Backend
  Route::get('dashboard','BackendController@dashboard')->name('dashboard');
  // CRUD
  Route::resource('categories', 'CategoryController'); // 7
  Route::resource('subcategories', 'SubcategoryController'); // 7
  Route::resource('brands', 'BrandController'); // 7
  Route::resource('items', 'ItemController'); // 7
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
