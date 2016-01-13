<?php

// 学校追加

Route::get('/test', function() {
   return \Illuminate\Support\Facades\View::make('test');
});

Route::post('/add_school', 'SchoolController@store');
Route::get('/show_school', 'SchoolController@show');

Route::post('/add_grade', 'GradeController@store');
Route::post('/show_grade', 'GradeController@show');

Route::post('/add_classroom', 'ClassRoomController@store');
Route::post('/show_classroom', 'ClassRoomController@show');

Route::post('/add_timeschedule', 'TimeScheduleController@store');
Route::post('/show_timeschedule', 'TimeScheduleController@show');

