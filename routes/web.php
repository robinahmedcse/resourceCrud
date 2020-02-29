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
   
    
    
    return view('welcome');
});

Route::get('/admin', 'HController@dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



     



Route::get('/ajaxdata', 'AjaxdataController@index');

Route::get('/ajaxdata/getdata', 'AjaxdataController@getdata')
        ->name('division.data');

Route::post('ajaxdata/postdata', 'AjaxdataController@postdata')
        ->name('ajaxdata.postdata');


Route::get('ajaxdata/fetchdata', 'AjaxdataController@fetchdata')->name('ajaxdata.getDataById');

Route::get('ajaxdata/removedata', 'AjaxdataController@removedata')->name('ajaxdata.deleteDataById');

Route::get('ajaxdata/massremove', 'AjaxdataController@massremove')->name('ajaxdata.massremove');





             

Route::resource('division','DivisionController');

Route::resource('district','DistrictController');

Route::resource('upazila','UpazilaController');


Route::resource('address','AddressController');

route::post('ajax/get/district/by/division/id', 'AjaxCallController@getDistrict');

route::post('ajax/get/upazila/by/district/id', 'AjaxCallController@getupazila');
