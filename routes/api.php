<?php

use App\Http\Controllers\Api\V1\ArticlesController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\BeneficiaryController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\CertificationController;
use App\Http\Controllers\Api\V1\CurrencyController;
use App\Http\Controllers\Api\V1\DictionaryController;
use App\Http\Controllers\Api\V1\LocationController;
use App\Http\Controllers\Api\V1\OnDemandServiceController;
use App\Http\Controllers\Api\V1\OpportunityController;
use App\Http\Controllers\Api\V1\QuoteController;
use App\Http\Controllers\Api\V1\SchoolReportingController;
use App\Http\Controllers\Api\V1\ServiceLocatorController;
use App\Http\Controllers\Api\V1\UtilityController;
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
    Route::get('key_populations', [BeneficiaryController::class, 'keyPops']);
    Route::get('location', [BeneficiaryController::class, 'location']);
    Route::get('mode_of_communications', [BeneficiaryController::class, 'comms']);
    Route::get('project_entry', [BeneficiaryController::class, 'projectEntry']);
    Route::get('service_providers', [BeneficiaryController::class, 'serviceProvider']);
    Route::get('services', [BeneficiaryController::class, 'services']);

    // YAZIPO
    Route::get('categories', [CategoryController::class, 'all']);
    Route::get("knowledgebase", [ArticlesController::class, 'all']);
    Route::get("knowledgebase/byCategory/{category}", [ArticlesController::class, 'byCategory']);
    Route::post('service-locator', [ServiceLocatorController::class, 'all']);
    Route::post('opportunities', [OpportunityController::class, 'all']);
    Route::post('dial-a-service', [OnDemandServiceController::class, 'all']);
    Route::post('request-a-service', [OnDemandServiceController::class, 'request']);
    Route::get('dictionary', [DictionaryController::class, 'all']);
    Route::get('quotes', [QuoteController::class, 'all']);
    Route::get('locations', [LocationController::class, 'all']);
    Route::get('utilities', [UtilityController::class, 'all']);
    Route::post('school', [SchoolReportingController::class, 'all']);
    Route::post('school/report', [SchoolReportingController::class, 'report']);
    Route::post('certifications', [CertificationController::class,'all']);
////    Route::apiResource('video-streams', VideoStreamController::class);
    Route::get('convert', [CurrencyController::class, 'convert']);
    Route::post('create', [BeneficiaryController::class, 'create']);

});
