<?php

use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPagesController::class, 'home'])->name('home');
Route::get('/help', [StaticPagesController::class, 'help'])->name('help');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');

// 显示表单
Route::get('/login',    [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// 处理提交
Route::post('/login',    [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// 退出登录
Route::post('/logout',   [AuthController::class, 'logout'])->name('logout');

// 购物车相关路由（需登录）
Route::middleware(['auth'])->group(function () {

    // 显示购物车
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    // 更新数量
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    // 删除商品
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.remove');
    // 结算页
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

});
