<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoCOntroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SingleActionController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/demo/{name}/{id?}', function ($name, $id = null) {
//     $data = compact('name', 'id');
//     return view('demo');
//     // print_r($data);
//     // echo "$name" . "   ";
//     // echo "$id";
//     //return view('demo');
// });
// Route::any('/test', function () {
//     echo "testing the route";
// });


// Route::put('users/{id}', function ($id) {
// });

// Route::patch();
// Route::delete('/users/{id}', function($id){

// });
// 

Route::get('/', [DemoController::class, 'index']);
Route::get('/about', 'App\http\Controllers\DemoController@about');
Route::get('/courses', SingleActionController::class);
Route::resource('/photo', PhotoController::class);
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/component', [ComponentController::class, 'index']);
Route::post('/component', [ComponentController::class, 'component']);


Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer', [CustomerController::class, 'view']);
Route::post('/customer', [CustomerController::class, 'store']);
