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
    return view('starting_page');
});

Route::get('/info', function () {
    return view('info');
});

/* Route::get('/test/{name}/foo/{age}', 'HobbyController@index'); */

Route::resource('hobby', 'HobbyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('tag', 'TagController'); // 3.step:  route for TagController 

Route::resource('user', 'UserController');

Route::get('/hobby/tag/{tag_id}', 'hobbyTagController@getFilteredHobbies')->name('hobby_tag');  // ROUTES THAT POINT TO FUNCTION IN HOBBYTAGCONTROLLER


// Attach / Detach Tags to Hobbies  2.step 
Route::get('/hobby/{hobby_id}/tag/{tag_id}/attach', 'hobbyTagController@attachTag');
Route::get('/hobby/{hobby_id}/tag/{tag_id}/detach', 'hobbyTagController@detachTag');