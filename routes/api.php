<?php

Route::group(['prefix' => 'v1','middleware' => 'auth'], function () {
    Route::resource('task', 'TasksController');
    Route::resource('user', 'UsersController');
    Route::resource('user.task', 'UserTasksController');
});
