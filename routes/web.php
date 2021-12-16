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
use App\Http\Controllers\AdminHomeController;
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

Route::get('/', function () {
    return view('home',['home'=>1]);
})->name('home');

//User Routes ---------------------------------------------------------------------------------------

Route::middleware('auth.check')->group(function(){

    Route::middleware('credits.check')->group(function(){
        Route::get('/post/create', [PostController\Create::class, 'index'])->name('post.create');
        Route::post('/post/create', [PostController\Create::class, 'store'])->name('post.create');
        Route::get('/post/check_slug', [PostController\Create::class, 'checkSlug'])->name('post.checkSlug');
    });

    Route::get('/post/update/{post}', [PostController\Update::class, 'index'])->name('post.update');
    Route::post('/post/update/{post}', [PostController\Update::class, 'update'])->name('post.update');

    Route::post('/post/delete/{post}', [PostController\Delete::class, 'destroy'])->name('post.delete');

    Route::post('/logout', [AuthController\Logout::class, 'store'])->name('logout');

    Route::get('/settings/account', [SettingsController\Account::class, 'index'])->name('settings.account');
    Route::post('/account/update', [SettingsController\Account::class, 'update'])->name('account.update');

    Route::get('/settings/email', [SettingsController\Email::class, 'index'])->name('settings.email');
    Route::post('/email/update', [SettingsController\Email::class, 'update'])->name('email.update');

    Route::get('/settings/password', [SettingsController\Password::class, 'index'])->name('settings.password');
    Route::post('/password/update', [SettingsController\Password::class, 'update'])->name('password.update');

    Route::get('/account/posts', [AccountController\PostDashboard::class, 'index'])->name('account.posts');
    Route::get('/account/posts/datatable/{id}', [AccountController\PostDashboard::class, 'datatable'])->name('account.posts.datatable');

    Route::post('/send/email', [EmailController\Agent::class, 'send'])->name('send.email');

    Route::get('/pricing', [PackageController\Pricing::class, 'index'])->name('pricing');

    Route::get('/ckeckout/{package}', [PackageController\Checkout::class, 'index'])->name('checkout');

    Route::get('/ckeckout/card/{package}', [PaymentController\Stripe::class, 'index'])->name('checkout.stripe');
    Route::post('/ckeckout/card/pay', [PaymentController\Stripe::class, 'pay'])->name('checkout.stripe.pay');
});

Route::get('/register', [AuthController\Register::class, 'index'])->name('register');
Route::post('/register', [AuthController\Register::class, 'store'])->name('register');

Route::get('/login', [AuthController\Login::class, 'index'])->name('login');
Route::post('/login', [AuthController\Login::class, 'store'])->name('login');

Route::get('/forgot-password', [AuthController\ForgotPassword::class, 'index'])->name('forgot_password');
Route::post('/forgot-password', [AuthController\ForgotPassword::class, 'store'])->name('forgot_password');

Route::get('/reset-password', [AuthController\PasswordReset::class, 'index'])->name('password.reset');
Route::post('/reset-password', [AuthController\PasswordReset::class, 'store'])->name('password.reset');


Route::get('/posts', [PostController\Dashboard::class, 'index'])->name('posts');

Route::get('/post/u/{slug}', [PostController\Show::class, 'index'])->name('post.show');



//Admin routes--------------------------------------------------------------------

Route::prefix('admin')->middleware('admin.auth')->group(function(){

    Route::get('', [AdminHomeController::class, 'index'])->name('admin.home.dashboard');


    Route::get('/packages', [PackageController\Dashboard::class, 'index'])->name('package.dashboard');
    Route::get('/packages/datatable', [PackageController\Dashboard::class, 'datatable'])->name('package.datatable');

    Route::get('/package/create', [PackageController\Create::class, 'index'])->name('package.create');
    Route::post('/package/create', [PackageController\Create::class, 'store'])->name('package.create');

    Route::get('/package/update/{package}', [PackageController\Update::class, 'index'])->name('package.update');
    Route::post('/package/update/{package}', [PackageController\Update::class, 'update'])->name('package.update');

    Route::post('/package/delete/{package}', [PackageController\Delete::class, 'destroy'])->name('package.delete');


    Route::get('/users', [UserController\Dashboard::class, 'index'])->name('user.dashboard');
    Route::get('/users/datatable', [UserController\Dashboard::class, 'datatable'])->name('user.datatable');

    Route::post('/user/delete/{user}', [UserController\Delete::class, 'destroy'])->name('user.delete');

    Route::get('/orders', [OrderController\Dashboard::class, 'index'])->name('order.dashboard');
    Route::get('/orders/datatable', [OrderController\Dashboard::class, 'datatable'])->name('order.datatable');

    Route::post('/order/delete/{order}', [OrderController\Delete::class, 'destroy'])->name('order.delete');
    Route::get('/order/{order}', [OrderController\Show::class, 'index'])->name('order.show');


    Route::get('/posts', [PostController\Admin\Dashboard::class, 'index'])->name('admin.post.dashboard');
    Route::get('/posts/datatable', [PostController\Admin\Dashboard::class, 'datatable'])->name('admin.post.datatable');

    Route::post('/post/delete/{post}', [PostController\Admin\Delete::class, 'detroy'])->name('admin.post.delete');

    Route::get('/pages', [PageController\Dashboard::class, 'index'])->name('page.dashboard');
    Route::get('/pages/datatable', [PageController\Dashboard::class, 'datatable'])->name('page.datatable');

    Route::get('/page/create', [PageController\Create::class, 'index'])->name('page.create');
    Route::post('/page/create', [PageController\Create::class, 'store'])->name('page.create');
    Route::get('/page/check_slug', [PageController\Create::class, 'checkSlug'])->name('page.checkSlug');


    Route::get('/page/update/{page}', [PageController\Update::class, 'index'])->name('page.update');
    Route::post('/page/update/{page}', [PageController\Update::class, 'update'])->name('page.update');

    Route::post('/page/delete/{page}', [PageController\delete::class, 'destroy'])->name('page.delete');

    Route::get('/dashboard', [AdminController\Dashboard::class, 'index'])->name('admin.dashboard');
    Route::get('/admins/datatable', [AdminController\Dashboard::class, 'datatable'])->name('admin.datatable');

    Route::post('/logout', [AdminController\Logout::class, 'store'])->name('admin.logout');

    Route::get('/settings/account', [AdminController\Settings\Account::class, 'index'])->name('admin.account.update');
    Route::post('/settings/account', [AdminController\Settings\Account::class, 'update'])->name('admin.account.update');

    Route::get('/settings/password', [AdminController\Settings\Password::class, 'index'])->name('admin.password.update');
    Route::post('/settings/password', [AdminController\Settings\Password::class, 'update'])->name('admin.password.update');


    Route::get('/create', [AdminController\Create::class, 'index'])->name('admin.create');
    Route::post('/create', [AdminController\Create::class, 'store'])->name('admin.create');

    Route::get('/update/{admin}', [AdminController\Update::class, 'index'])->name('admin.update');
    Route::post('/update/{admin}', [AdminController\Update::class, 'update'])->name('admin.update');

    Route::post('/delete/{admin}', [AdminController\Delete::class, 'destroy'])->name('admin.delete');

});

Route::get('/admin/login', [AdminController\Login::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminController\Login::class, 'store'])->name('admin.login');

Route::get('/page/{slug}', [PageController\Show::class, 'index'])->name('page.show');