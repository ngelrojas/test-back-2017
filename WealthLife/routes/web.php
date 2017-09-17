<?php


Route::get('/appontment','WealthlifeController\WealthlifeController@appontment');

Route::resource('/','WealthlifeController\WealthlifeController');

Route::resource('patients','PatientController\PatientController');

Route::resource('doctors','DoctorController\DoctorController');