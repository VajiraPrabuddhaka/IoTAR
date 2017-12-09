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

Route::get('/', 'machineDataController@fetchAll');

Route::get('machine/{id}', 'machineDataController@fetchMachineData');

Route::get('indicator/{id}','indicatorController@fetchData');

Route::post('/addNewMachine' ,'machineDataController@addNewMachine');

Route::get('getform_Gauge/{m_id}','formController@getform_Gauge');

Route::get('getform_Indicator/{m_id}','formController@getform_Indicator');

Route::get('getform_ToggleButton/{m_id}','formController@getform_ToggleButton');

Route::get('getform_StackIndicator/{m_id}','formController@getform_StackIndicator');

Route::post('/addNewComponent/{id}' ,'machineDataController@addNewComponent');
