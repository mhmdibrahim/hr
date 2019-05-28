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
Route::get('/regions/show','HomeController@show');
Route::get('/countries/show','HomeController@countriesShow');
Route::get('/base',function (){
    return view('base');
});
Route::get('/depts/show','DepartmentController@show')->name('departments.show');
Route::get('/dept/add','DepartmentController@add')->name('department.add');
Route::post('/dept/add','DepartmentController@storeDepartment')->name('department.store');
Route::get('/dept/edit/{id}','DepartmentController@edit')->name('department.edit');
Route::post('/dept/edit','DepartmentController@update')->name('department.update');
Route::get('/dept/delete/{id}','DepartmentController@delete')->name('department.delete');

Route::get('/jobs/show','JobController@show')->name('jobs.show');
Route::get('/job/add','JobController@add')->name('job.add');
Route::post('/job/add','JobController@store')->name('job.store');
Route::get('/job/delete/{id}','JobController@delete')->name('job.delete');
Route::get('/job/edit/{id}','JobController@edit')->name('job.edit');
Route::post('/job/edit/','JobController@update')->name('job.update');



