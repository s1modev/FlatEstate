<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
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

Route::post('/send/email', [EmailController\Agent::class, 'send'])->name('send.email');

Route::get('/register', [AuthController\Register::class, 'index'])->name('register');
Route::post('/register', [AuthController\Register::class, 'store'])->name('register');

Route::get('/login', [AuthController\Login::class, 'index'])->name('login');
Route::post('/login', [AuthController\Login::class, 'store'])->name('login');

Route::post('/logout', [AuthController\Logout::class, 'store'])->name('logout');

Route::get('/settings/account', [SettingsController\Account::class, 'index'])->name('settings.account');
Route::post('/account/update', [SettingsController\Account::class, 'update'])->name('account.update');

Route::get('/settings/email', [SettingsController\Email::class, 'index'])->name('settings.email');
Route::post('/email/update', [SettingsController\Email::class, 'update'])->name('email.update');

Route::get('/settings/password', [SettingsController\Password::class, 'index'])->name('settings.password');
Route::post('/password/update', [SettingsController\Password::class, 'update'])->name('password.update');

Route::get('/account/posts', [AccountController\PostDashboard::class, 'index'])->name('account.posts');


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

Route::get('/admin/orders', [OrderController\Dashboard::class, 'index'])->name('order.dashboard');
Route::post('/admin/order/delete/{order}', [OrderController\Delete::class, 'destroy'])->name('order.delete');
Route::get('/admin/order/{order}', [OrderController\Show::class, 'index'])->name('order.show');

Route::get('/admin/posts', [PostController\Admin\Dashboard::class, 'index'])->name('admin.post.dashboard');
Route::post('/admin/post/delete/{post}', [PostController\Admin\Delete::class, 'detroy'])->name('admin.post.delete');

Route::get('/admin/pages', [PageController\Dashboard::class, 'index'])->name('page.dashboard');

Route::get('/admin/page/create', [PageController\Create::class, 'index'])->name('page.create');
Route::post('/admin/page/create', [PageController\Create::class, 'store'])->name('page.create');
Route::get('/page/check_slug', [PageController\Create::class, 'checkSlug'])->name('page.checkSlug');


Route::get('/admin/page/update/{page}', [PageController\Update::class, 'index'])->name('page.update');
Route::post('/admin/page/update/{page}', [PageController\Update::class, 'update'])->name('page.update');

Route::get('/page/{slug}', [PageController\Show::class, 'index'])->name('page.show');

Route::post('/admin/page/delete/{page}', [PageController\delete::class, 'destroy'])->name('page.delete');

Route::get('/admins', [AdminController\Dashboard::class, 'index'])->name('admin.dashboard');

Route::get('/admin/login', [AdminController\Login::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminController\Login::class, 'store'])->name('admin.login');

Route::get('/admin/create', [AdminController\Create::class, 'index'])->name('admin.create');
Route::post('/admin/create', [AdminController\Create::class, 'store'])->name('admin.create');

Route::get('/admin/update/{admin}', [AdminController\Update::class, 'index'])->name('admin.update');
Route::post('/admin/update/{admin}', [AdminController\Update::class, 'update'])->name('admin.update');

Route::post('/admin/delete/{admin}', [AdminController\Delete::class, 'destroy'])->name('admin.delete');