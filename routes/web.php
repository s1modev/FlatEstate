<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [AuthController\Register::class, 'index'])->name('register');
Route::post('/register', [AuthController\Register::class, 'store'])->name('register');

Route::get('/login', [AuthController\Login::class, 'index'])->name('login');
Route::post('/login', [AuthController\Login::class, 'store'])->name('login');

Route::get('/settings/account', [SettingsController\Account::class, 'index'])->name('settings.account');
Route::post('/account/update', [SettingsController\Account::class, 'update'])->name('account.update');

Route::get('/settings/email', [SettingsController\Email::class, 'index'])->name('settings.email');
Route::post('/email/update', [SettingsController\Email::class, 'update'])->name('email.update');

Route::get('/settings/password', [SettingsController\Password::class, 'index'])->name('settings.password');
Route::post('/password/update', [SettingsController\Password::class, 'update'])->name('password.update');


Route::get('/posts', [PostController\Dashboard::class, 'index'])->name('posts');

Route::get('/post/u/{slug}', [PostController\Show::class, 'index'])->name('post.show');

Route::get('/post/create', [PostController\Create::class, 'index'])->name('post.create');
Route::post('/post/create', [PostController\Create::class, 'store'])->name('post.create');
Route::get('/post/check_slug', [PostController\Create::class, 'checkSlug'])->name('post.checkSlug');

Route::get('/post/update/{post}', [PostController\Update::class, 'index'])->name('post.update');
Route::post('/post/update/{post}', [PostController\Update::class, 'update'])->name('post.update');

Route::get('/pricing', [PackageController\Pricing::class, 'index'])->name('pricing');

Route::get('/ckeckout/{package}', [PackageController\Checkout::class, 'index'])->name('checkout');

Route::get('/ckeckout/card/{package}', [PaymentController\Stripe::class, 'index'])->name('checkout.stripe');
Route::post('/ckeckout/card/pay', [PaymentController\Stripe::class, 'pay'])->name('checkout.stripe.pay');


Route::get('/admin/package/create', [PackageController\Create::class, 'index'])->name('package.create');
Route::post('/admin/package/create', [PackageController\Create::class, 'store'])->name('package.create');

Route::get('/admin/package/update/{package}', [PackageController\Update::class, 'index'])->name('package.update');
Route::post('/admin/package/update/{package}', [PackageController\Update::class, 'update'])->name('package.update');

Route::post('/admin/package/delete/{package}', [PackageController\Delete::class, 'destroy'])->name('package.delete');

Route::get('/admin/packages', [PackageController\Dashboard::class, 'index'])->name('package.dashbaord');

Route::get('/admin/users', [UserController\Dashboard::class, 'index'])->name('user.dashbaord');

Route::post('/admin/user/delete/{user}', [UserController\Delete::class, 'destroy'])->name('user.delete');
