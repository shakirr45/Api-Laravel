<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\makeFirstApiController;
use App\Http\Controllers\getDbApiController;
use App\Http\Controllers\postApiController;
use App\Http\Controllers\putApiController;
use App\Http\Controllers\deleteApiController;
use App\Http\Controllers\searchApiController;
use App\Http\Controllers\validationController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\apiUploadFileController;






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

///Make First Api========================>>
Route::get('data',[makeFirstApiController::class, 'getData']);

//Get Data from DB with API also id to find (use params)==============>>
Route::get('datas/{id?}', [getDbApiController::class, 'list']);

///Post Api by using {postman}========================>>
Route::post('posturl' , [postApiController::class, 'add']);

///Put Api by using {postman}========================>>
Route::put('puturl' , [putApiController::class, 'update']);

///Delete Api by using {postman}========================>>
Route::delete('deleteturl/{id}' , [deleteApiController::class, 'delete']);

///Search Api by using {postman}========================>>
Route::get('searchurl/{name}' , [searchApiController::class, 'search']);

///Validation Api by using {postman}========================>>
Route::post('validatonhurl' , [validationController::class, 'testData']);

///Api with Resource by using {postman}========================>>

Route::apiResource('resourceurl' , resourceController::class);

///Validation Api by using {postman and when select a file put the same name as key as controller} (storage/app/apiDocs in file )========================>>
Route::post('uploadurl' , [apiUploadFileController::class, 'uploadData']);







