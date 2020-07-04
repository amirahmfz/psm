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

if (! function_exists('is_equal_url')) {
    function is_equal_url($route)
    {
        if (is_string($route)) {
            $route = [$route];
        }
        
        return str_replace(['https', 'http'], '', route(...$route)) == str_replace(['https', 'http'], '', \Request::url());
    }
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});



Auth::routes();

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/home','HomeController@index2')->name('home2');
    
    Route::get('/download-manual','DownloadController@manual')->name('download.manual');
    
    Route::get('/users', 'Admin\UserController@index')->name('users.index');
    Route::get('/users/{user}/chart', 'Admin\UserController@userChart')->name('users.userChart');
    Route::get('/users/{user}', 'Admin\UserController@edit')->name('users.edit');
    Route::post('/users/{user}', 'Admin\UserController@update')->name('users.update');
    Route::get('/users/{user}/delete', 'Admin\UserController@delete')->name('users.delete');
    Route::get('/chart', 'Admin\UserController@chart')->name('users.chart');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/tests', 'StressTestController@index')->name('tests.index');
    Route::post('/tests', 'StressTestController@store')->name('tests.store');
    Route::get('/chart', 'UserController@chart')->name('users.chart');
    Route::get('/video', 'UserController@video')->name('users.video');
});
