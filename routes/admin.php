<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\Admin\UserController;

// Route::middleware('auth')->group(function(){

// });

Route::resource('/users',UserController::class)->names('users');
Route::resource('/categories',CategoryController::class)->names('category');
Route::resource('/products',ProductController::class)->names('product');
Route::resource('/purchases',PurchaseController::class)->names('purchase');
Route::resource('/warehouses',WarehouseController::class)->names('warehouse');
