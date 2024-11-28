<?php

use App\Http\Controllers\Authentication\AdminAuthController;

use App\Http\Controllers\v1\Backend\Course\CourseCategoryController;
use Illuminate\Support\Facades\Route;

Route::post('/app/login', [AdminAuthController::class, 'login']);

Route::middleware(['auth:admin-api', 'admin', 'scope:admin'])->prefix('app/')->group(function () {
   Route::get('check', [AdminAuthController::class, 'check']);
   Route::get('user/permission', [AdminAuthController::class, 'permissions']);
   Route::post('logout', [AdminAuthController::class, 'logout']);

   // Course Category here
   Route::apiResource('course/category', CourseCategoryController::class)->middleware('permission:course.category');
});
