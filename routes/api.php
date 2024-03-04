<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\reactDataAPI;
use App\Http\Controllers\personalinfos;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('org_registers', [OrgController::class, 'APIstore']);
Route::post('list_org_registers', [OrgController::class, 'APIindex']);
Route::post('org_register_delete', [OrgController::class, 'APIdelete']);
Route::post('org_register_update', [OrgController::class, 'APIupdate']);


Route::post('reactSaveData', [reactDataAPI::class, 'create']);
Route::get('reactGetContact', [reactDataAPI::class, 'index']);
Route::post('reactFindUpdateContact', [reactDataAPI::class, 'edit']);
Route::post('reactUpdateContactID', [reactDataAPI::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// DataIncertFromReactAPI_into_submitInfosTable

Route::post('submitInfo', [personalinfos::class, 'store']);
Route::get('editInfo/{id}', [personalinfos::class, 'edit']);
Route::put('update/Info/{id}', [personalinfos::class, 'update']);
Route::delete('Delete/Info/{id}', [personalinfos::class, 'destroy']);