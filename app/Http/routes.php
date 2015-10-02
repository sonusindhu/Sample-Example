<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'WelcomeController@index');
Route::get('/dashboard', 'DashboardController@index');

// Registration action
Route::get('/signup', 'Auth\AuthController@getRegister');
Route::post('/signup', 'Auth\AuthController@postRegister');


// login action
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');


Route::get('/forget', 'Auth\PasswordController@getEmail');
Route::post('/forget', 'Auth\PasswordController@postEmail');



Route::get('/about', 'WelcomeController@about');
Route::get('/gottman-marriage-therapy', 'WelcomeController@gottmantherapy');
Route::get('/intimate-solutions', 'WelcomeController@intimatesolutions');
Route::get('/contact', 'WelcomeController@contact');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



// Admin Panel Routes

Route::group(['namespace' => 'Admin'], function() {

        Route::get('/admin/login', array('as' => 'admin', 'uses' => 'LoginController@index'));
        Route::post('/admin/login', array('as' => 'admin', 'uses' => 'LoginController@post'));
        Route::get('/admin/logout', array('as' => 'admin', 'uses' => 'LoginController@logout'));


        Route::group(['middleware' => 'admin'], function() {
                Route::get('/admin', array('as' => 'admin', 'uses' => 'DashboardController@index'));
                Route::get('/admin/profile', array('as' => 'admin', 'uses' => 'DashboardController@profile'));
                Route::post('/admin/profile/addpost', array('as' => 'admin', 'uses' => 'DashboardController@addpost'));

                Route::get('/admin/profile/password', array('as' => 'admin', 'uses' => 'DashboardController@password'));
                Route::post('/admin/profile/passwordpost', array('as' => 'admin', 'uses' => 'DashboardController@passwordpost'));

                // Manage Users
                Route::get('/admin/users', array('as' => 'admin', 'uses' => 'UsersController@index'));
                Route::get('/admin/users/delete/{id}', array('as' => 'admin', 'uses' => 'UsersController@delete'));
                Route::get('/admin/users/update/{id}/{status}', array('as' => 'admin', 'uses' => 'UsersController@update'));
                Route::get('/admin/users/add', array('as' => 'admin', 'uses' => 'UsersController@add'));
                Route::post('/admin/users/addpost', array('as' => 'admin', 'uses' => 'UsersController@addpost'));


                // Manage FAQ
                Route::get('/admin/faqs', array('as' => 'admin', 'uses' => 'FaqsController@index'));
                Route::get('/admin/faqs/delete/{id}', array('as' => 'admin', 'uses' => 'FaqsController@delete'));
                Route::get('/admin/faqs/update/{id}/{status}', array('as' => 'admin', 'uses' => 'FaqsController@update'));
                Route::get('/admin/faqs/add', array('as' => 'admin', 'uses' => 'FaqsController@add'));
                Route::post('/admin/faqs/addfaq', array('as' => 'admin', 'uses' => 'FaqsController@addfaq'));
                Route::get('/admin/faqs/edit/{id}', array('as' => 'admin', 'uses' => 'FaqsController@edit'));
                Route::post('/admin/faqs/editfaq', array('as' => 'admin', 'uses' => 'FaqsController@editfaq'));


                // Manage Contacts
                Route::get('/admin/contacts', array('as' => 'admin', 'uses' => 'ContactsController@index'));
                Route::get('/admin/contacts/delete/{id}', array('as' => 'admin', 'uses' => 'ContactsController@delete'));
                Route::get('/admin/contacts/update/{id}/{status}', array('as' => 'admin', 'uses' => 'ContactsController@update'));


                // Manage Ads
                Route::get('/admin/ads', array('as' => 'admin', 'uses' => 'AdsController@index'));
                Route::get('/admin/ads/edit/{position}', array('as' => 'admin', 'uses' => 'AdsController@edit'));
                Route::post('/admin/ads/editad', array('as' => 'admin', 'uses' => 'AdsController@editad'));
                Route::get('/admin/ads/update/{id}/{status}', array('as' => 'admin', 'uses' => 'AdsController@update'));


                // Manage Videos
                Route::get('/admin/videos', array('as' => 'admin', 'uses' => 'VideosController@index'));
                Route::get('/admin/videos/delete/{id}', array('as' => 'admin', 'uses' => 'VideosController@delete'));
                Route::get('/admin/videos/update/{id}/{status}', array('as' => 'admin', 'uses' => 'VideosController@update'));
                Route::get('/admin/videos/add', array('as' => 'admin', 'uses' => 'VideosController@add'));
                Route::post('/admin/videos/addvideo', array('as' => 'admin', 'uses' => 'VideosController@addvideo'));
                Route::get('/admin/videos/edit/{id}', array('as' => 'admin', 'uses' => 'VideosController@edit'));
                Route::post('/admin/videos/editvideo', array('as' => 'admin', 'uses' => 'VideosController@editvideo'));


                // Manage Blog
                Route::get('/admin/posts', array('as' => 'admin', 'uses' => 'PostsController@index'));
                Route::get('/admin/posts/delete/{id}', array('as' => 'admin', 'uses' => 'PostsController@delete'));
                Route::get('/admin/posts/update/{id}/{status}', array('as' => 'admin', 'uses' => 'PostsController@update'));
                Route::get('/admin/posts/add', array('as' => 'admin', 'uses' => 'PostsController@add'));
                Route::post('/admin/posts/addpost', array('as' => 'admin', 'uses' => 'PostsController@addpost'));
                Route::get('/admin/posts/edit/{id}', array('as' => 'admin', 'uses' => 'PostsController@edit'));
                Route::post('/admin/posts/editpost', array('as' => 'admin', 'uses' => 'PostsController@editpost')); 
        });
});
