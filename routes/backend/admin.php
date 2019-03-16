<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Nccne\FilterWordController;
use App\Http\Controllers\Backend\Chengyekeji\FilterWordController as ChengyekejiController;
use App\Http\Controllers\Backend\Chinashangpinku\FilterWordController as ChinashangpinkuController;
use App\Http\Controllers\Backend\Chinawbk\FilterWordController as ChinawbkController;
use App\Http\Controllers\Backend\Gxcor\FilterWordController as GxcorController;
use App\Http\Controllers\Backend\Jiangshanshi\FilterWordController as JiangshanshiController;
use App\Http\Controllers\Backend\Jiangyihua\FilterWordController as JiangyihuaController;
use App\Http\Controllers\Backend\Byete\FilterWordController as ByeteController;
use App\Http\Controllers\Backend\Mchinawbk\FilterWordController as MchinawbkController;
/*
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['namespace' => 'nccne', 'prefix' => 'nccne', 'as' => 'nccne.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [FilterWordController::class, 'index'])->name('index');
        Route::post('/', [FilterWordController::class, 'store'])->name('store');
        Route::get('create', [FilterWordController::class, 'create'])->name('create');
        Route::get('edit', [FilterWordController::class, 'edit'])->name('edit');
        Route::post('upload', [FilterWordController::class, 'upload'])->name('upload');
    });
});


Route::group(['namespace' => 'chengyekeji', 'prefix' => 'chengyekeji', 'as' => 'chengyekeji.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [ChengyekejiController::class, 'index'])->name('index');
        Route::post('/', [ChengyekejiController::class, 'store'])->name('store');
        Route::get('create', [ChengyekejiController::class, 'create'])->name('create');
        Route::get('edit', [ChengyekejiController::class, 'edit'])->name('edit');
        Route::post('upload', [ChengyekejiController::class, 'upload'])->name('upload');
    });
});


Route::group(['namespace' => 'chinashangpinku', 'prefix' => 'chinashangpinku', 'as' => 'chinashangpinku.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [ChinashangpinkuController::class, 'index'])->name('index');
        Route::post('/', [ChinashangpinkuController::class, 'store'])->name('store');
        Route::get('create', [ChinashangpinkuController::class, 'create'])->name('create');
        Route::get('edit', [ChinashangpinkuController::class, 'edit'])->name('edit');
        Route::post('upload', [ChinashangpinkuController::class, 'upload'])->name('upload');
    });
});

Route::group(['namespace' => 'chinawbk', 'prefix' => 'chinawbk', 'as' => 'chinawbk.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [ChinawbkController::class, 'index'])->name('index');
        Route::post('/', [ChinawbkController::class, 'store'])->name('store');
        Route::get('create', [ChinawbkController::class, 'create'])->name('create');
        Route::get('edit', [ChinawbkController::class, 'edit'])->name('edit');
        Route::post('upload', [ChinawbkController::class, 'upload'])->name('upload');
    });
});


Route::group(['namespace' => 'gxcor', 'prefix' => 'gxcor', 'as' => 'gxcor.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [GxcorController::class, 'index'])->name('index');
        Route::post('/', [GxcorController::class, 'store'])->name('store');
        Route::get('create', [GxcorController::class, 'create'])->name('create');
        Route::get('edit', [GxcorController::class, 'edit'])->name('edit');
        Route::post('upload', [GxcorController::class, 'upload'])->name('upload');
    });
});


Route::group(['namespace' => 'jiangshanshi', 'prefix' => 'jiangshanshi', 'as' => 'jiangshanshi.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [JiangshanshiController::class, 'index'])->name('index');
        Route::post('/', [JiangshanshiController::class, 'store'])->name('store');
        Route::get('create', [JiangshanshiController::class, 'create'])->name('create');
        Route::get('edit', [JiangshanshiController::class, 'edit'])->name('edit');
        Route::post('upload', [JiangshanshiController::class, 'upload'])->name('upload');
    });
});

Route::group(['namespace' => 'jiangyihua', 'prefix' => 'jiangyihua', 'as' => 'jiangyihua.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [JiangyihuaController::class, 'index'])->name('index');
        Route::post('/', [JiangyihuaController::class, 'store'])->name('store');
        Route::get('create', [JiangyihuaController::class, 'create'])->name('create');
        Route::get('edit', [JiangyihuaController::class, 'edit'])->name('edit');
        Route::post('upload', [JiangyihuaController::class, 'upload'])->name('upload');
    });
});

Route::group(['namespace' => 'byete', 'prefix' => 'byete', 'as' => 'byete.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [ByeteController::class, 'index'])->name('index');
        Route::post('/', [ByeteController::class, 'store'])->name('store');
        Route::get('create', [ByeteController::class, 'create'])->name('create');
        Route::get('edit', [ByeteController::class, 'edit'])->name('edit');
        Route::post('upload', [ByeteController::class, 'upload'])->name('upload');
    });
});

Route::group(['namespace' => 'mchinawbk', 'prefix' => 'mchinawbk', 'as' => 'mchinawbk.'], function() {
    Route::group(['prefix' => 'filterword', 'as' => 'filterword.'], function() {
        Route::get('/', [MchinawbkController::class, 'index'])->name('index');
        Route::post('/', [MchinawbkController::class, 'store'])->name('store');
        Route::get('create', [MchinawbkController::class, 'create'])->name('create');
        Route::get('edit', [MchinawbkController::class, 'edit'])->name('edit');
        Route::post('upload', [MchinawbkController::class, 'upload'])->name('upload');
    });
});











