<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DeviceController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IssueController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\Page\BannerController;
use App\Http\Controllers\Page\ContentController;
// use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Page\IntroductionController;
use App\Http\Controllers\Page\MainContentController;
use App\Models\Appointment;
use App\Models\Issue;
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

// Route::get('/', function () {
//     return view('layout.app');
// });

Route::get('/',[HomeController::class,'index'])->name('Home.index');
Route::get('admin/dashboard',[HomeController::class,'dashboard'])->name('admin.index');


Route::get('/sales',[HomeController::class,'sales'])->name('home.sales');
Route::get('/brand',[HomeController::class,'brand'])->name('home.brand');
Route::get('/page',[HomeController::class,'DyanamicPage'])->name('home.page');
Route::get('/issueData',[HomeController::class,'issue_data'])->name('home.issueData');
Route::post('/saveBooking',[HomeController::class,'Appointment'])->name('home.appointment');
Route::get('/brand/search', [HomeController::class, 'searchBrands'])->name('search.brands');
Route::get('/brands-id/{id}', [HomeController::class, 'getBrandId'])->name('search.brandId');
Route::get('/models/search', [HomeController::class, 'searchModels'])->name('search.Models');
Route::get('/models-id/{id}', [HomeController::class, 'getModelById'])->name('search.ModelsId');
Route::get('/brand/get-all-brands', [HomeController::class, 'getSearchBrands'])->name('search.getAllBrands');
Route::get('/models/get-all-models', [HomeController::class, 'getSearchModels'])->name('search.getAllModels');
Route::post('/admin/updateAppointmentStatus', [HomeController::class, 'updateStatus'])->name('search.updateStatus');

Route::get('/device',[HomeController::class,'device'])->name('home.device');
Route::get('/issues',[HomeController::class,'issues'])->name('home.issues');
Route::get('/about_us',[HomeController::class,'AboutUs'])->name('home.about_us');
Route::post('/contact/submit',[HomeController::class,'Contact'])->name('home.contact');

// Login

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/submit_login', [LoginController::class, 'login'])->name('submit_login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// users
Route::get('auth/profile', [ProfileController::class, 'index'])->name('auth.profile');
Route::post('/profile/upload', [ProfileController::class, 'upload'])->name('profile.upload');
Route::post('/profile/remove', [ProfileController::class, 'remove'])->name('profile.remove');
Route::put('auth/profile_update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('profile/change-password', [ProfileController::class, 'changePassword'])->name('password.change');


// Brand

Route::get('admin/brands', [BrandController::class, 'index'])->name('brand.index');
Route::post('admin/brands/store', [BrandController::class, 'store'])->name('brand.store');
Route::get('admin/get_brand_data', [BrandController::class, 'getBrandData'])->name('brand.get');
Route::post('admin/brands/update', [BrandController::class, 'update'])->name('brand.update');
Route::delete('admin/brands/delete', [BrandController::class, 'destroy'])->name('brand.destroy');
Route::get('admin/brands/data', [BrandController::class, 'getAllBrandData'])->name('brand.data');




// Device
Route::get('admin/devices', [DeviceController::class, 'index'])->name('device.index');
Route::get('admin/brands_get', [DeviceController::class, 'getBrandsByCategory'])->name('device.brand_get');
Route::post('admin/devices/store', [DeviceController::class, 'store'])->name('device.store');
Route::get('admin/get_device_data', [DeviceController::class, 'getDeviceData'])->name('device.get');
Route::post('admin/devices/update', [DeviceController::class, 'update'])->name('device.update');
Route::delete('admin/devices/delete', [DeviceController::class, 'destroy'])->name('device.destroy');
Route::get('admin/devices/data', [DeviceController::class, 'getAllDevicesData'])->name('device.data');

// Categories
Route::get('admin/categories', [CategoryController::class, 'index'])->name('category.index');
Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('admin/get_category_data', [CategoryController::class, 'getCategoryData'])->name('category.get');
Route::put('admin/categories/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('admin/categories/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('admin/categories/data', [CategoryController::class, 'getAllCategoryData'])->name('category.data');


// Issue

Route::get('admin/issues', [IssueController::class, 'index'])->name('issue.index');
Route::post('admin/issues/store', [IssueController::class, 'store'])->name('issue.store');
Route::get('admin/get_issues_data', [IssueController::class, 'getIssueData'])->name('issue.get');
Route::delete('admin/issues/delete', [IssueController::class, 'destroy'])->name('issue.destroy');
Route::get('admin/issues/data', [IssueController::class, 'getIssuesData'])->name('issues.data');
Route::post('admin/issues/update', [IssueController::class, 'update'])->name('issues.update');

// Appointment
Route::get('admin/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('admin/getAppointment', [AppointmentController::class, 'getAppointmentData'])->name('appointment.data');


// Page-Content

// 1.page banner

Route::get('admin/page/banner', [BannerController::class, 'index'])->name('pagebanner.banner');
Route::post('admin/page/banner', [BannerController::class, 'store'])->name('pagebanner.store');
Route::get('admin/page/get_data', [BannerController::class, 'getData'])->name('pagebanner.getData');
Route::get('admin/page/edit', [BannerController::class, 'edit'])->name('pagebanner.edit');
Route::post('admin/page/update', [BannerController::class, 'update'])->name('pagebanner.update');
Route::delete('admin/page/delete', [BannerController::class, 'destroy'])->name('pagebanner.delete');

// 2. Page Intro

Route::get('admin/page/intro', [IntroductionController::class, 'index'])->name('pageintro.index');
Route::post('admin/page-introduction/store', [IntroductionController::class, 'store'])->name('pageintro.store');
Route::get('admin/page-introduction/data', [IntroductionController::class, 'getData'])->name('pageintro.getData');
Route::get('admin/page-introduction/edit', [IntroductionController::class, 'edit'])->name('pageintro.edit');
Route::post('admin/page-introduction/update', [IntroductionController::class, 'update'])->name('pageintro.update');
Route::delete('admin/page-introduction/delete', [IntroductionController::class, 'destroy'])->name('pageintro.destroy');


// 3. Page Content

Route::get('admin/page-content', [ContentController::class, 'index'])->name('pagecontent.index');
Route::get('admin/page-content/data', [ContentController::class, 'getContentData'])->name('pagecontent.getData');
Route::get('admin/page-content/form', [ContentController::class, 'showForm'])->name('pagecontent.form');
Route::post('admin/page-content/store', [ContentController::class, 'store'])->name('pagecontent.store');
Route::get('admin/page-content/edit/{id}', [ContentController::class, 'edit'])->name('pagecontent.edit');
Route::post('admin/page-content/update', [ContentController::class, 'update'])->name('pagecontent.update');
Route::delete('admin/page-content/delete', [ContentController::class, 'destroy'])->name('pagecontent.delete');

// 4.Main Content

Route::get('admin/page-main-content', [MainContentController::class, 'index'])->name('page-main-content.index');
Route::get('admin/page-main-content/data', [MainContentController::class, 'getData'])->name('page-main-content.getData');
Route::post('admin/page-main-content/store', [MainContentController::class, 'store'])->name('pagecontent.main-content.store');
Route::get('admin/page-main-content/edit', [MainContentController::class, 'edit'])->name('pagecontent.main-content.edit');
Route::post('admin/page-main-content/update', [MainContentController::class, 'update'])->name('page-main-content.update');
Route::delete('admin/page-main-content/delete', [MainContentController::class, 'destroy'])->name('page-main-content.delet');


