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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'welcome';
});

//Route parametar 

Route:: get('/test1/{id}', function($id) {
return $id;

});

Route:: get('/test2/{id?}', function() {
    
    return 'welcome';
 });

 //route name 
 Route:: get('/show-num/{id?}', function() {
    
    return 'welcome';
 })->name ('a');


 //Use "Name Space When I have Folder inside Folder"
Route::namespace('Front')->group(function(){

    Route::get('Users','UserController@showUserName');

});

//Use Prefix when I need use multy Group  

Route:: prefix('User')->group(function(){
   Route:: get('show','User\UserController@showUserName');//بدل مااعمل هيك بستخدم Prefix
   Route:: delete('delete','UserController@showUserName');
   Route:: get('Edit','UserController@showUserName');
   Route:: put('update','UserController@showUserName');


});

//another shape for group
Route::group(['prefix'=>'User' ,'middleware'=>'auth'],function(){
    Route:: get('show','UserController@showUserName');
    Route:: delete('delete','UserController@showUserName');
    Route:: get('Edit','UserController@showUserName');
    Route:: put('update','UserController@showUserName');
 });

 //Middlware
 Route::get('alaa',function(){
return 'midllware';
 })->middleware('auth');

Route::get('Num','Admin\SecondController@ShowNumberp')->middleware('auth');

Route::resource('New','NewController@Show');



Route::get('Index','Front\FirstController@getIndex');*/

Auth::routes(['verify  => true']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
