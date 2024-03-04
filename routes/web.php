<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\OrgCandidateController;

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
Route::get('org_register', [OrgController::class, 'create']);
Route::post('org_register', [OrgController::class, 'store']);
Route::get('list_org_registered', [OrgController::class, 'index']);

Route::get('org_candidate_register', [OrgCandidateController::class, 'create']);
Route::post('org_candidate_register', [OrgCandidateController::class, 'store']);
Route::get('registered_candidates_list', [OrgCandidateController::class, 'index']);
Route::view('/welcome','helperDotCom.index');


// Route::('org',"/users/register");
// Route::post('users_register',[userController::class,'register']);

// Route::view('users_register',"/users/register");
// Route::post('users_register',[userController::class,'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
