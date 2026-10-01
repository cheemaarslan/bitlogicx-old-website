<?php

use Inertia\Inertia;
use App\Models\SiteContent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PageSettingController;
use App\Http\Controllers\CareerCategoryController;
use App\Http\Controllers\ScheduleInterviewController;

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
//     return Inertia::render('Home', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('optimize', function () {
    Artisan::call('optimize:clear');
    return 'optimized';
});

Route::get('migrate', function () {
    Artisan::call('migrate');
    return 'Migration is done';
});

Route::get('storage', function () {
    Artisan::call('storage:link');
    Storage::disk('public')->move(asset('images/default/default_image.jpg'), 'images/default/default_image.jpg');

    return 'fresh start is done';
});

Route::get('/', [FrontPageController::class, 'index'])->name('front.index');
Route::get('about', [FrontPageController::class, 'about'])->name('front.about');
Route::get('services', [FrontPageController::class, 'services'])->name('front.services');
Route::get('our-work', [FrontPageController::class, 'our_work'])->name('front.our_work');
Route::get('our-product', [FrontPageController::class, 'our_product'])->name('front.our_product');
Route::get('team', [FrontPageController::class, 'team'])->name('front.team');
Route::get('application', [FrontPageController::class, 'application'])->name('front.application');
Route::get('contact', [FrontPageController::class, 'contact'])->name('front.contact');
Route::get('hire', [FrontPageController::class, 'hire'])->name('front.hire');
Route::get('blogs', [FrontPageController::class, 'blogs'])->name('front.blogs');
Route::get('blog/{blog:slug}', [FrontPageController::class, 'singleblog'])->name('front.blog');
// Route::get('faqs' , [FrontPageController::class, 'faqs'])->name('front.faqs');
Route::get('quotation', [FrontPageController::class, 'get_quotation'])->name('front.get_quotation');
Route::get('careers', [FrontPageController::class, 'careers'])->name('front.careers');
Route::post('contact', [FrontPageController::class, 'contact_store'])->name('front.contact.store')->middleware('throttle:5,1');
Route::post('hire', [FrontPageController::class, 'hire_store'])->name('front.hire.store')->middleware('throttle:5,1');
Route::post('application', [FrontPageController::class, 'application_store'])->name('application.store');
Route::get('career/{career:slug}', [ApplicationController::class, 'create'])->name('front.career.create');
Route::get('project/{project:slug}', [FrontPageController::class, 'singleproject'])->name('front.project');
Route::get('product/{product:slug}', [FrontPageController::class, 'singleproduct'])->name('front.product');
Route::get('service/{service:slug}', [FrontPageController::class, 'singleservice'])->name('front.service');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes(['register' => false]);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.index');

    Route::resource('service', ServiceController::class, ['parameters' => [
        'service' => 'service:slug'
    ]]);
    Route::patch('/update-card/{card}', 'ServiceController@updateCard');
    Route::resource('process', ProcessController::class, ['parameters' => [
        'process' => 'process:slug'
    ]]);
    Route::resource('project', ProjectController::class, ['parameters' => [
        'project' => 'project:slug'
    ]]);
    Route::resource('product', ProductController::class, ['parameters' => [
        'product' => 'product:slug'
    ]]);
    Route::resource('blog', BlogsController::class, ['parameters' => [
        'blog' => 'blog:slug'
    ]]);
    Route::resource('team', TeamController::class, ['parameters' => [
        'team' => 'team:slug'
    ]]);
    // Route::post('/team/update-order', [TeamController::class, 'updateOrder'])->name('team.updateOrder');
    Route::get('schedule-interview/upcoming', [ScheduleInterviewController::class, 'upcoming'])->name('schedule-interview.upcoming');
    Route::resource('schedule-interview', ScheduleInterviewController::class, ['parameters' => [
        'schedule-interview' => 'team:slug'
    ]]);
    Route::resource('application', ApplicationController::class, ['parameters' => [
        'application' => 'application:slug'
    ]])->except('create', 'store');;
    Route::resource('template', TemplateController::class, ['parameters' => [
        'template' => 'template:slug'
    ]])->except('create', 'store', 'show');

    Route::get('user/profile/edit', [UserController::class, 'profile_edit'])->name('user.profile.edit');
    Route::patch('user/profile/update', [UserController::class, 'profile_update'])->name('user.profile.update');
    Route::get('change-password', [UserController::class, 'change_password_index'])->name('change-password.index');
    Route::patch('change-password', [UserController::class, 'change_password_update'])->name('change-password.update');

    Route::resource('user', UserController::class, ['parameters' => [
        'user' => 'user:slug'
    ]]);


    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/{id}/show', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('contact/{id}/delete', [ContactController::class, 'delete'])->name('contact.destroy');

    Route::get('hire', [HireController::class, 'index'])->name('hire.index');
    Route::get('hire/{id}/show', [HireController::class, 'show'])->name('hire.show');
    Route::delete('hire/{id}/delete', [HireController::class, 'delete'])->name('hire.destroy');

    Route::get('page/home', [PageController::class, 'home'])->name('page.home');
    Route::get('page/about', [PageController::class, 'about'])->name('page.about');
    Route::get('page/setting/index', [PageController::class, 'setting_index'])->name('page.setting.index');


    Route::patch('page/home/banner', [HomePageController::class, 'banner'])->name('page.home.banner');
    Route::patch('page/home/project', [HomePageController::class, 'project'])->name('page.home.project');
    Route::patch('page/home/product', [HomePageController::class, 'product'])->name('page.home.product');
    Route::patch('page/home/service', [HomePageController::class, 'service'])->name('page.home.service');
    Route::patch('page/home/process', [HomePageController::class, 'process'])->name('page.home.process');
    Route::patch('page/home/team', [HomePageController::class, 'team'])->name('page.home.team');

    Route::patch('page/about/update', [AboutPageController::class, 'update'])->name('page.about.update');

    Route::patch('page/setting/update', [PageSettingController::class, 'update'])->name('page.setting.update');

    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::put('setting/smtp', [SettingController::class, 'smtp'])->name('setting.smtp');
    Route::put('setting/whatsapp', [SettingController::class, 'whatsapp'])->name('setting.whatsapp');
    Route::put('setting/recaptcha', [SettingController::class, 'recaptcha'])->name('setting.recaptcha');
    Route::put('setting/pusher', [SettingController::class, 'pusher'])->name('setting.pusher');
    Route::patch('setting/other', [SettingController::class, 'other'])->name('setting.other');

    Route::get('setting/career', function () {
        $setting = SiteContent::first();
        return view('back.career.career_setting', compact('setting'));
    })->name('setting.career.index');

    Route::resource('career-category', CareerCategoryController::class, ['parameters' => [
        'careerCategory' => 'careerCategory:slug'
    ]]);

    Route::resource('career', CareerController::class, ['parameters' => [
        'career' => 'career:slug'
    ]]);
});

// Route::get('quotation/product/{product:slug}', [OrderController::class, 'create'])->name('order.product.create');

// Route::post('quotation/product/{product:slug}', [OrderController::class, 'store'])->name('order.product.store');

// Route::resource('order', OrderController::class, ['parameters' => [
//     'order' => 'order:slug'
// ]])->except('create', 'store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
