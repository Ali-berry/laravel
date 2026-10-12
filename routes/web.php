<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/task', function () {
//     return "Tasks page kaam kar raha hai!";
// });

// Route::get('/task', function (){
//     return view('task');
// });

Route::get('/task',[TaskController:: class, 'index']);
Route::get('/task/create',[TaskController:: class, 'create' ]);
Route::post('/task',[Taskcontroller:: class, 'store']);
Route::get('/task/{task}/edit',[Taskcontroller:: class, 'edit']);
Route::put('/task/{task}',[Taskcontroller:: class, 'update']);
Route::delete('/task/{task}', [TaskController::class, 'destroy']);

