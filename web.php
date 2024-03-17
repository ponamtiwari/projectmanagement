<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;

Route::get('/data', [DataController::class, 'index']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/projects',[ProjectController::class,'projects']);
Route::get('/addteam',[AdminController::class,'addTeam']);
Route::post('/addteamstore',[AdminController::class,'addTeamStore']);
Route::get('/teamlist',[AdminController::class,'teamMemberList'])->name('team-list');
Route::get('/editteam/{id}',[AdminController::class,'editTeam']);
Route::post('/updateteam/{id}',[AdminController::class,'updateTeam']);
Route::get('/deleteteam/{id}',[AdminController::class,'deleteTeam']);



Route::get('/addproject',[ProjectController::class,'addProject']);
Route::post('/addprojectstore',[ProjectController::class,'addProjectStore']);
Route::get('/projects',[ProjectController::class,'projects'])->name('project-list');
Route::get('/editproject/{id}',[ProjectController::class,'editProject']);
Route::post('/updateproject/{id}',[ProjectController::class,'updateProject']);
Route::get('/deleteproject/{id}',[ProjectController::class,'deleteProject']);
Route::get('/project/{id}',[ProjectController::class,'showProject']);

Route::get('/login', function () {
    return view('login');
});
