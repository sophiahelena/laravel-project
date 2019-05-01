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
   // return view('welcome');
    return 'welcome home';
});

Route::get('/users', function(){
    return 'Show users';
});

Route::get('/users/{id}', function($id){
    return "Show user: {$id}";
})->where('id', '[0-0]+');

Route::get('/users/new', function(){
    return "Create new user";
});

Route::get('/greeting/{name}/{nickname?}', function($name, $nickname=null){
    if($nickname){
        return "Welcome {$name}, your nickname is {$nickname}";
    } else{
        return "Welcome {$name}, you do not have a nickname";
    }



});