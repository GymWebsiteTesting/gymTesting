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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/mainPage', function () {
    return view('mainPage');
    
});

// Route::get('/userPro.create', function () {
//     return view('userPro.create');
    
// });
Route::get('/userProject', function () {
    return view('userProject');
    
});

Route::get('create','userProController@create')->name('userPro.create');

Route::post('store','userProController@Store')->name('product.store');

// Route::get('/userPro.index', function () {
//     return view('userPro.index');
    
// });

Route::get('Profile','userProController@index1')->name('userPro.profile');

Route::get('userProfile','userProController@index')->name('userPro.index');

Route::get('edit/userPro/{id}','userProController@Edit');

Route::post('update/userPro/{id}','userProController@Update');

Route::get('Exercise','ExerciseController@index')->name('exercise.index');

Route::get('AddExercise','ExerciseController@create')->name('exercise.create');

Route::post('store1','ExerciseController@Store')->name('product1.store');



// Route::get('product','ProductController@index')->name('product.index');