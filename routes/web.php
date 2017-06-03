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
App::singleton('App\Billing\Stripe',function(){
  return  new \App\Billing\Stripe(config('services.stripe,secret'));
});
// $stripe=resolve('App\Billing\Stripe');
// dd($stripe);

//show all posts
Route::get('/posts', 'PostsController@index')->name('home');
Route::get('/home', 'PostsController@index')->name('home');
Route::get('/posts/tags/{tag}', 'TagsController@index')->name('home');


Route::group(['middleware'=>['web','auth']],function(){

  //create new post
  Route::get('/posts/create','PostsController@create');
  //save new post in database
  Route::post('/posts','PostsController@store');
  //save new comment
  Route::post('/posts/{post}/comments','CommentsController@store');
  //logout
  Route::get('/logout', 'SessionsController@destroy');

});

//show specific post
Route::get('/posts/{post}','PostsController@show');
//registeration
Route::group(['middleware'=>['web','guest']],function(){
  Route::get('/register', 'RegisterationController@create');
  Route::post('/register', 'RegisterationController@store');
  Route::get('/login', 'SessionsController@create')->name('login');
  Route::post('/login', 'SessionsController@store');
});




// Auth::routes();
