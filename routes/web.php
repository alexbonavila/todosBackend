<?php

Gate::define('gate-name',function(){

});

Gate::define('impossible-gate',function(){
    return false;
});

Gate::define('easy-gate',function(){
    return true;
});

Gate::define('update-task',function($user, $task){
    return $user->id == $task->user_id;
});

Gate::define('update-task1',function($user){
    return $user->isAdmin();
});

Gate::define('update-task2',function($user, $task){
    if ($user->isAdmin()){return true;}
    return $user->id == $task->user_id;
});

Gate::define('update-task3',function($user, $task){
    if ($user->isAdmin()){return true;}
    if ($user->hasRole('editor')){return true;}
    return $user->id == $task->user_id;
});

Gate::define('show-tasks',function($user, $task){
    return true;
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/tasks', function () {
        return view('tasks');
    });

    Route::get('/profile/tokens', function () {
        return view('tokens');
    });

    Route::get('users', function () {
        dd(App\User::paginate());
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function () {
    phpinfo();
});