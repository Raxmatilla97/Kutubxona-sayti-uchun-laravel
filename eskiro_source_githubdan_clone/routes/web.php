<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LockScreen;
use App\Http\Controllers\backend\BooksCategoryesController;


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
    return redirect()->route('form/job/list');
});

Route::group(['middleware'=>'guest'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- main dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('em/dashboard', [App\Http\Controllers\HomeController::class, 'emDashboard'])->name('em/dashboard');

// -----------------------------settings----------------------------------------//
Route::get('company/settings/page', [App\Http\Controllers\SettingController::class, 'companySettings'])->middleware('auth')->name('company/settings/page');
Route::get('roles/permissions/page', [App\Http\Controllers\SettingController::class, 'rolesPermissions'])->middleware('auth')->name('roles/permissions/page');
Route::post('roles/permissions/save', [App\Http\Controllers\SettingController::class, 'addRecord'])->middleware('auth')->name('roles/permissions/save');
Route::post('roles/permissions/update', [App\Http\Controllers\SettingController::class, 'editRolesPermissions'])->middleware('auth')->name('roles/permissions/update');
Route::post('roles/permissions/delete', [App\Http\Controllers\SettingController::class, 'deleteRolesPermissions'])->middleware('auth')->name('roles/permissions/delete');

// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [App\Http\Controllers\LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [App\Http\Controllers\LockScreen::class, 'unlock'])->name('unlock');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [App\Http\Controllers\UserManagementController::class, 'profile'])->middleware('auth')->name('profile_user');
Route::post('profile/information/save', [App\Http\Controllers\UserManagementController::class, 'profileInformation'])->name('profile/information/save');

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::post('search/user/list', [App\Http\Controllers\UserManagementController::class, 'searchUser'])->name('search/user/list');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::post('user/delete', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth')->name('user/delete');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

// ----------------------------- search user management ------------------------------//
Route::post('search/user/list', [App\Http\Controllers\UserManagementController::class, 'searchUser'])->name('search/user/list');

// ----------------------------- form change password ------------------------------//
Route::get('change/password', [App\Http\Controllers\UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [App\Http\Controllers\UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- job ------------------------------//
Route::get('form/job/list', [App\Http\Controllers\JobController::class, 'jobList'])->name('form/job/list');
Route::get('form/job/view', [App\Http\Controllers\JobController::class, 'jobView'])->name('form/job/view');

// ----------------------------- form employee ------------------------------//
Route::get('all/employee/card', [App\Http\Controllers\EmployeeController::class, 'cardAllEmployee'])->middleware('auth')->name('all/employee/card');
Route::get('all/employee/list', [App\Http\Controllers\EmployeeController::class, 'listAllEmployee'])->middleware('auth')->name('all/employee/list');
Route::post('all/employee/save', [App\Http\Controllers\EmployeeController::class, 'saveRecord'])->middleware('auth')->name('all/employee/save');
Route::get('all/employee/view/edit/{employee_id}', [App\Http\Controllers\EmployeeController::class, 'viewRecord'])->middleware('auth');
Route::post('all/employee/update', [App\Http\Controllers\EmployeeController::class, 'updateRecord'])->middleware('auth')->name('all/employee/update');
Route::get('all/employee/delete/{employee_id}', [App\Http\Controllers\EmployeeController::class, 'deleteRecord'])->middleware('auth');
Route::post('all/employee/search', [App\Http\Controllers\EmployeeController::class, 'employeeSearch'])->name('all/employee/search');
Route::post('all/employee/list/search', [App\Http\Controllers\EmployeeController::class, 'employeeListSearch'])->name('all/employee/list/search');

// ----------------------------- profile employee ------------------------------//
Route::get('employee/profile/{rec_id}', [App\Http\Controllers\EmployeeController::class, 'profileEmployee'])->middleware('auth');


// ----------------------------- form holiday ------------------------------//
Route::get('form/holidays/new', [App\Http\Controllers\HolidayController::class, 'holiday'])->middleware('auth')->name('form/holidays/new');
Route::post('form/holidays/save', [App\Http\Controllers\HolidayController::class, 'saveRecord'])->middleware('auth')->name('form/holidays/save');
Route::post('f  orm/holidays/update', [App\Http\Controllers\HolidayController::class, 'updateRecord'])->middleware('auth')->name('form/holidays/update');

// ----------------------------- form leaves ------------------------------//
Route::get('form/leaves/new', [App\Http\Controllers\LeavesController::class, 'leaves'])->middleware('auth')->name('form/leaves/new');

// ----------------------------- Categories page ------------------------------//
 Route::resource('library/categories', BooksCategoryesController::class)->middleware('auth');




