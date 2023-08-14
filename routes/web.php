<?php

use App\Http\Controllers\BrancheController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IdentificationTypeController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\PercentageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ServiceeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UseerController;
use App\Http\Controllers\UserController;
use App\Models\Percentage;
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
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('inicio');
    })->name('dashboard');
});

//para tener acceso a las funciones index, create, store, show, edit, update, destroye
Route::resource('department', DepartmentController::class);
Route::resource('municipality', MunicipalityController::class);
Route::resource('company', CompanyController::class);
Route::resource('branche', BrancheController::class);
Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
Route::resource('identification_type', IdentificationTypeController::class);
Route::resource('provider',ProviderController::class);
Route::resource('customer', CustomerController::class);
Route::resource('purchase', PurchaseController::class);
Route::resource('percentage',PercentageController::class);
Route::resource('user', UserController::class);



Route::get('company/create/{id}', [CompanyController::class, 'getMunicipalities']);
Route::get('branche/create/{id}', [BrancheController::class, 'getMunicipalities']);
Route::get('provider/create/{id}', [ProviderController::class, 'getMunicipalities']);
Route::get('customer/create/{id}', [CustomerController::class, 'getMunicipalities']);




// Route::resource('servicee',ServiceeController::class);
// Route::resource('employee',EmployeeController::class);
// Route::resource('student',StudentController::class);
// Route::resource('qualification',QualificationController::class);

