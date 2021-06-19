<?php

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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

// Route::get('/payments', function(){
//     return Payment::all();
// });
Route::resource('payments', PaymentController::class);

// Route::get('/payments', [PaymentController::class, 'index']);
// Route::post('/payments', [PaymentController::class, 'store']);

// Route::post('payments', function(){
//     return Payment::create([
//         'tranx_ref' => 'TYR7463URY73',
//         'email' => 'o3cloudng@gmail.com',
//         'firstname' => 'Olumide',
//         'lastname' => 'Oderinde',
//         'phone' => '+2348060617790',
//         'bank' => 'GTB',
//         'mode_payment' => 'USSD',
//         'currency' => 'NGN',
//         'amount' => '500',
//         'status' => 'success'
//     ]);
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
