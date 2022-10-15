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

Route::get('/hello', function () {
    return'hello world';
});

//we use something similar to dot notation to ref the pages folder and access the about file
Route::get('/about', function(){
    return view('pages.about');

});

//using @ we can access a function from a controller file
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
// // to insert dynamic values
// Route::get('/users/{id}', function($id){
//     //the . is able to concat this as our url is a string
//     return 'This user is '.$id;
// });

//just note that is best not to directly return a view from the route