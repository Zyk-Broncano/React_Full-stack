<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyCtrl;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/showPersonData', [dummyCtrl::class, 'showData']);
Route::post('/storePersonData', [dummyCtrl::class, 'storeData']);
Route::put('/updatePersonData/{name_id}', [dummyCtrl::class, 'updateData']);
Route::delete('/deletePersonData/{name_id}', [dummyCtrl::class, 'deleteData']);

