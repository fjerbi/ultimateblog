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

Route::group(['namespace'=>'fjerbi\ultimateblog\Http\Controllers'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/ultimateblog','StoryController@index')->name('index');
    Route::get('story/{slug}','StoryController@details')->name('story.details');   
    Route::get('/category/{slug}','StoryController@storyByCategory')->name('category.stories');
    Route::get('/tag/{slug}','StoryController@storyByTag')->name('tag.stories');   
    Route::get('profile/{name}','AuthorController@profile')->name('author.profile');  
    Route::get('/search','SearchController@search')->name('search');
    Route::post('subscriber','SubscriberController@store')->name('subscriber.store');
    Route::group(['middleware' => ['web']], function () {
        Auth::routes();
        Route::get('story/{slug}','StoryController@details')->name('story.details');
        Route::get('/me', 'ProfileController@index')->name('profile');
        Route::group(['middleware'=>['auth']], function (){
            Route::post('favorite/{story}/add','FavoriteController@add')->name('story.favorite');
            Route::post('comment/{story}','CommentController@store')->name('comment.store');
         });
         
         Route::get('/tag/{slug}','StoryController@storyByTag')->name('tag.stories');
        Route::get('/about', 'HomeController@about')->name('about');
        Route::get('user/profile/{id}', 'HomeController@user')->name('user');
        Route::post('ajax', 'ProfileController@ajax')->name('ajax');
        Route::get('profile','UserController@profile')->name('profile');
        Route::get('/ultimateblog','StoryController@index')->name('index');
         Route::resource('ultimateblog','StoryController');
    });


    
    
    
    
});
