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

// Route::get('/', function () {
//     return view('home')->middleware('auth');
// });
Route::get('/courses', function () {
    return view('courses');
}); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('courses/create','CoursesController@create')->name('courses.create')->middleware('auth');
Route::post('courses','CoursesController@store')->name('courses.store')->middleware('auth');
Route::get('/course/{course}', 'CoursesController@show')->name('course.show')->middleware('auth');
Route::resource('users','UserController')->middleware('auth');
Route::resource('subjects','SubjectController');

