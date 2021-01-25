<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
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
    return view('admin.layout.default');
});

Route::get("/admin/user/index",[UserController::class,'index']);
Route::get("/admin/user/create",[UserController::class,'create']);
Route::post("/admin/user/store",[UserController::class,'store']);
Route::get("/admin/user/show/{id}",[UserController::class,'show']);
Route::post("/admin/user/update/{id}",[UserController::class,'update']);
Route::post("/admin/user/delete/{id}",[UserController::class,'destroy']);

Route::get("/admin/category/index",[CategoryController::class,'index']);
Route::get("/admin/category/create",[CategoryController::class,'create']);
Route::post("/admin/category/store",[CategoryController::class,'store']);
Route::get("/admin/category/show/{id}",[CategoryController::class,'show']);
Route::post("/admin/category/update/{id}",[CategoryController::class,'update']);
Route::post("/admin/category/delete/{id}",[CategoryController::class,'destroy']);

Route::get("/admin/customer/index",[CustomerController::class,'index']);
Route::get("/admin/customer/create",[CustomerController::class,'create']);
Route::post("/admin/customer/store",[CustomerController::class,'store']);
Route::get("/admin/customer/show/{id}",[CustomerController::class,'show']);
Route::post("/admin/customer/update/{id}",[CustomerController::class,"update"]);
Route::post("/admin/customer/delete/{id}",[CustomerController::class,"destroy"]);

Route::get("/admin/invoice/index",[InvoiceController::class,'index']);
Route::get("/admin/invoice/create",[InvoiceController::class,'create']);
Route::post("/admin/invoice/store",[InvoiceController::class,'store']);
Route::get("/admin/invoice/show/{id}",[InvoiceController::class,'show']);
Route::post("/admin/invoice/update/{id}",[InvoiceController::class,'update']);
Route::post("/admin/invoice/delete/{id}",[InvoiceController::class,'destroy']);

Route::get("/admin/item/index",[ItemController::class,'index']);
Route::get("/admin/item/create",[ItemController::class,'create']);
Route::post("/admin/item/store",[ItemController::class,'store']);
Route::get("/admin/item/show/{id}",[ItemController::class,'show']);
Route::post("/admin/item/update/{id}",[ItemController::class,'update']);
Route::post("/admin/item/delete/{id}",[ItemController::class,'destroy']);

Route::get("/admin/sub_category/index",[SubCategoryController::class,'index']);
Route::get("/admin/sub_category/create",[SubCategoryController::class,'create']);
Route::post("/admin/sub_category/store",[SubCategoryController::class,'store']);
Route::get("/admin/sub_category/show/{id}",[SubCategoryController::class,'show']);
Route::post("/update{{id}}",[SubCategoryController::class,'update']);
Route::post("/admin/sub_category/delete/{id}",[SubCategoryController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/PaymentType/index', [App\Http\Controllers\PaymentTypeController::class, 'index']);
Route::get('/PaymentType/create', [App\Http\Controllers\PaymentTypeController::class, 'create']);
Route::post('/PaymentType/create', [App\Http\Controllers\PaymentTypeController::class, 'store']);

