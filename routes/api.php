<?php

use App\Http\Controllers\Api\V1\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'v1', 'namespace' => 'Api\V1'], function () {
    Route::post('login', [AuthController::class, 'login']);

    // Web Widgets
//    Route::get('key_populations', 'BeneficiaryController@keyPops');
//    Route::get('location', 'BeneficiaryController@location');
//    Route::get('mode_of_communications', 'BeneficiaryController@comms');
//    Route::get('project_entry', 'BeneficiaryController@projectEntry');
//    Route::get('service_providers', 'BeneficiaryController@serviceProvider');
//    Route::get('services', 'BeneficiaryController@services');

    // YAZIPO
//    Route::get('categories', 'CategoryController@all');
//    Route::post('knowledgebase', 'ArticleController@all');
//    Route::post('service-locator', 'ServiceLocatorController@all');
//    Route::post('opportunities', 'OpportunitiesController@all');
//    Route::post('dial-a-service', 'OnDemandServicesController@all');
//    Route::post('request-a-service', 'OnDemandServicesController@request');
//    Route::get('dictionary', 'DictionaryController@all');
//    Route::get('quotes', 'QuoteController@all');
//    Route::get('locations', 'LocationController@all');
//    Route::get('utilities', 'UtilityController@all');
//    Route::post('school', 'SchoolReportingController@all');
//    Route::post('school/report', 'SchoolReportingController@report');
//    Route::post('certifications', 'CertificationController@all');
////    Route::apiResource('video-streams', VideoStreamController::class);
//
//    // Convert Endpoint
//    Route::get('convert', 'CurrencyController@convert');
//
//    Route::middleware('auth:api')->group(function () {
//        Route::get('test-auth', 'TestController@testAuth');
//
//        // Data Collection
//        Route::post('create', 'BeneficiaryController@create');
//
//    });

});
