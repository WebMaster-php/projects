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
    return view('admin.login_page');
});
Route::get('/hello', function () {
    return view('hello');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/post-login', 'AuthController@postLogin')->name('post-login'); 
Route::get('/registration', 'AuthController@registration')->name('login');
Route::post('/post-registration', 'AuthController@postRegistration')->name('registration'); 
Route::get('/dashboard', 'AuthController@dashboard')->name('dashboard'); 
Route::get('/logout', 'AuthController@logout');
Route::get('/index2', 'HomeController@index2')->name('index2');
Route::get('/index3', 'HomeController@index3')->name('index3');
Route::get('/form', 'HomeController@form')->name('form');
Route::get('/advance', 'HomeController@advance')->name('form-advance');
Route::get('/upload', 'HomeController@upload')->name('form-upload');
Route::get('/buttons', 'HomeController@buttons')->name('form-buttons');
Route::get('/validation', 'HomeController@validation')->name('form-validation');
Route::get('/wizards', 'HomeController@wizards')->name('form-wizards');
Route::get('/tables', 'HomeController@tables')->name('tables');
Route::get('/dynamic', 'HomeController@dynamic')->name('tables-dynamic');
Route::get('/fixed_sidebar', 'HomeController@fixed_sidebar')->name('fixed_sidebar');
Route::get('/fixed_footer', 'HomeController@fixed_footer')->name('fixed_footer');
Route::get('/general_elements', 'HomeController@general_elements')->name('general_elements');
Route::get('/media_gallary', 'HomeController@media_gallary')->name('media_gallary');
Route::get('/typography', 'HomeController@typography')->name('typography');
Route::get('/icons', 'HomeController@icons')->name('icons');
Route::get('/glyphicons', 'HomeController@glyphicons')->name('glyphicons');
Route::get('/widgets', 'HomeController@widgets')->name('widgets');
Route::get('/invoice', 'HomeController@invoice')->name('invoice');
Route::get('/inbox', 'HomeController@inbox')->name('inbox');
Route::get('/calendar', 'HomeController@calendar')->name('calendar');
Route::get('/chartjs', 'HomeController@chartjs')->name('chartjs');
Route::get('/chartjs2', 'HomeController@chartjs2')->name('chartjs2');
Route::get('/morisjs', 'HomeController@morisjs')->name('morisjs');
Route::get('/echarts', 'HomeController@echarts')->name('echarts');
Route::get('/other_charts', 'HomeController@other_charts')->name('other_charts');
Route::get('/e_commerce', 'HomeController@e_commerce')->name('e_commerce');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/project_detail', 'HomeController@project_detail')->name('project_detail');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/page_403', 'HomeController@page_403')->name('page_403');
Route::get('/page_404', 'HomeController@page_404')->name('page_404');
Route::get('/page_500', 'HomeController@page_500')->name('page_500');
Route::get('/plain_page', 'HomeController@plain_page')->name('plain_page');
Route::get('/login_page', 'HomeController@login_page')->name('login_page');
Route::get('/pricing_tables', 'HomeController@pricing_tables')->name('pricing_tables');
Route::get('/level2', 'HomeController@level2')->name('level2');

