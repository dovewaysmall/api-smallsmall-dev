<?php

use App\Http\Controllers\UserAPIController;
use App\Http\Controllers\TenantAPIController;
use App\Http\Controllers\LandlordAPIController;
use App\Http\Controllers\PropertyAPIController;
use App\Http\Controllers\VerificationAPIController;
use App\Http\Controllers\TransactionAPIController;
use App\Http\Controllers\LoanAPIController;
use App\Http\Controllers\InspectionAPIController;
use App\Http\Controllers\PayoutAPIController;
use App\Http\Controllers\BookingAPIController;
use App\Http\Controllers\ReportRepairAPIController;
use App\Http\Controllers\StaffFXAPIController;
use App\Http\Controllers\StaffTSRAPIController;
use App\Http\Controllers\StaffCXAPIController;
use App\Http\Controllers\FeedbackAPIController;
use App\Http\Controllers\BuySmallSmallInspectionAPIController;
use App\Http\Controllers\StaySmallSmallAPIController;
use App\Http\Controllers\CallLogsAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('buy-smallsmall-api-count/{id?}', [BuySmallSmallInspectionAPIController::class, 'buySmallSmallAPICount']);

Route::get('buy-smallsmall-api/{id?}', [BuySmallSmallInspectionAPIController::class, 'buySmallSmallAPI']);

Route::get('buy-smallsmall-property-request-api/{id?}', [BuySmallSmallInspectionAPIController::class, 'buySmallSmallPropertyRequestAPI']);

Route::post('add-call-log-api',[CallLogsAPIController::class,'addCallLogAPI']);
Route::get('call-logs-api/{id?}',[CallLogsAPIController::class,'allCallLogsAPI']);

Route::get('user-api/{id?}',[UserAPIController::class,'userAPI']);
Route::get('user-count-api/{id?}',[UserAPIController::class,'userCountAPI']);
Route::get('usercx-api/{id?}',[UserAPIController::class,'userCXAPI']);

Route::get('tenant-api/{id?}',[TenantAPIController::class,'tenantAPI']);
Route::get('tenant-profile-api/{id?}',[TenantAPIController::class,'tenantProfile']);
Route::get('tenant-rental-info/{id?}',[TenantAPIController::class,'tenantRentalInfo']);
Route::put('update-account-manager-api',[TenantAPIController::class,'updateAccountManagerAPI']);

Route::get('landlord-api/{id?}',[LandlordAPIController::class,'landlordAPI']);
Route::get('landlord-count-api/{id?}',[LandlordAPIController::class,'landlordCountAPI']);
Route::post('add-landlord-api',[LandlordAPIController::class,'addLandlordAPI']);

Route::get('stafffx-api/{id?}',[StaffFXAPIController::class,'staffFXAPI']);
Route::get('stafftsr-api/{id?}',[StaffTSRAPIController::class,'staffTSRAPI']);
Route::get('staffcx-api/{id?}',[StaffCXAPIController::class,'staffCXAPI']);

Route::get('property-api/{id?}',[PropertyAPIController::class,'propertyAPI']);
Route::get('property-owner-api/{id?}',[PropertyAPIController::class,'propertyPerOwnerAPI']);
Route::post('add-property-api',[PropertyAPIController::class,'addPropertyAPI']);
Route::put('edit-property-api',[PropertyAPIController::class,'editPropertyAPI']);

Route::get('verification-api/{id?}',[VerificationAPIController::class,'verificationAPI']);
Route::get('verification-count-api/{id?}',[VerificationAPIController::class,'verificationCountAPI']);
Route::put('update-verification-status-api',[VerificationAPIController::class,'updateVerificationStatusAPI']);

Route::get('transaction-api/{id?}',[TransactionAPIController::class,'transactionAPI']);
Route::get('transaction-count-api/{id?}',[TransactionAPIController::class,'transactionCountAPI']);

Route::get('transaction-by-user-api/{id?}',[TransactionAPIController::class,'transactionByUserAPI']);


Route::get('inspection-api/{id?}',[InspectionAPIController::class,'inspectionAPI']);
Route::get('inspection-count-api/{id?}',[InspectionAPIController::class,'inspectionCountAPI']);
Route::put('update-inspection-api',[InspectionAPIController::class,'updateInspectionAPI']);
Route::put('update-post-inspection-feedback-api',[InspectionAPIController::class,'updatePostInspectionFeedbackAPI']);

Route::get('inspectiontsr-api/{id?}',[InspectionAPIController::class,'inspectionTSRAPI']);
Route::put('update-inspection-status-api',[InspectionAPIController::class,'updateInspectionStatusAPI']);
Route::get('inspections-this-month-api/{id?}',[InspectionAPIController::class,'inspectionsThisMonth']);
Route::get('inspections-last-month-api/{id?}',[InspectionAPIController::class,'inspectionsLastMonth']);
Route::put('/multiple-inspection',[InspectionAPIController::class,'multipleInspection']);
Route::put('/apartment-not-available',[InspectionAPIController::class,'apartmentNotAvailable']);


Route::get('payout-api/{id?}',[PayoutAPIController::class,'payoutAPI']);
Route::post('add-payout-api',[PayoutAPIController::class,'addPayoutAPI']);

Route::get('all-repair-api/{id?}',[ReportRepairAPIController::class,'allRepairAPI']);
Route::get('repair-history-api/{id?}',[ReportRepairAPIController::class,'reportRepairHistoryAPI']);
Route::post('report-repair-api',[ReportRepairAPIController::class,'reportRepairAPI']);

Route::get('booking-api/{id?}',[BookingAPIController::class,'bookingAPI']);
Route::get('booking-distinct-count-api/{id?}',[BookingAPIController::class,'bookingDistinctCountAPI']);
Route::get('booking-distinct-tenant-api/{id?}',[BookingAPIController::class,'bookingDistinctTenantAPI']);
Route::get('new-tenants-api/{id?}',[BookingAPIController::class,'newTenantsThatBooked']);
Route::put('update-new-subscribers-api', [BookingAPIController::class, 'newSubscribersUpdateSave']);
Route::get('subscription-due-this-month-api/{id?}',[BookingAPIController::class,'subscriptionDueThisMonth']);


Route::get('loan-eligible-api/{id?}',[LoanAPIController::class,'loanEligibleSubscribers']);
Route::get('loan-eligible-count-api/{id?}',[LoanAPIController::class,'loanEligibleSubscribersCount']);

Route::post('feedback-api',[FeedbackAPIController::class,'feedback']);

Route::get('buy-inspection-api/{id?}',[BuySmallSmallInspectionAPIController::class,'buyInspectionAPI']);

Route::get('staysmallsmall-bookings-api/{id?}', [StaySmallSmallAPIController::class, 'bookingsAPI']);

