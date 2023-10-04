<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ExpenseController;
use App\Http\Controllers\admin\ExpenseReportController;
use App\Http\Controllers\admin\ExpensesCategoryController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\SectionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('admin.auth.login');
});



Auth::routes();
//Route::match(['get', 'post'], 'register', function () { abort(404); });

Route::get('/home', [\App\Http\Controllers\admin\HomeController::class, 'index'])->name('home');

Route::resource('invoices', \App\Http\Controllers\admin\InvoicesController::class);

Route::resource('expenses', ExpenseController::class);
Route::get('expenses_report', [ExpenseReportController::class, 'index']);
Route::post('Search_expenses', [ExpenseReportController::class, 'Search_Expense']);


Route::resource('sections', SectionsController::class);

Route::resource('expenses_categories', ExpensesCategoryController::class);

Route::resource('products', \App\Http\Controllers\admin\ProductsController::class);

Route::resource('InvoiceAttachments', 'App\Http\Controllers\admin\InvoicesAttachmentsController');

Route::get('/section/{id}', 'App\Http\Controllers\admin\InvoicesController@getproducts');

//Route::get('/InvoicesDetails/{id}', 'App\Http\Controllers\admin\InvoicesDetailsController@edit');
//
//Route::get('Attachments/{invoice_number}/{file_name}', 'InvoicesDetailsController@open_file');
//
//Route::get('download/{invoice_number}/{file_name}', 'App\Http\Controllers\admin\InvoicesDetailsController@get_file');

Route::get('/edit_invoice/{id}', 'App\Http\Controllers\admin\InvoicesController@edit');

Route::get('/Status_show/{id}', 'App\Http\Controllers\admin\InvoicesController@show')->name('Status_show');

Route::post('/Status_Update/{id}', 'App\Http\Controllers\admin\InvoicesController@Status_Update')->name('Status_Update');

//Route::post('delete_file', 'App\Http\Controllers\admin\InvoicesDetailsController@destroy')->name('delete_file');

Route::get('Invoice_Paid','App\Http\Controllers\admin\InvoicesController@Invoice_Paid');

Route::get('Invoice_UnPaid','App\Http\Controllers\admin\InvoicesController@Invoice_UnPaid');

Route::get('Invoice_Partial','App\Http\Controllers\admin\InvoicesController@Invoice_Partial');

Route::resource('Archive', 'App\Http\Controllers\admin\admin\InvoiceAchiveController');

Route::get('Print_invoice/{id}','App\Http\Controllers\admin\InvoicesController@Print_invoice');

Route::get('export_invoices', 'App\Http\Controllers\admin\InvoicesController@export');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});

Route::get('invoices_report', 'App\Http\Controllers\admin\Invoices_Report@index');
Route::post('Search_invoices', 'App\Http\Controllers\admin\Invoices_Report@Search_invoices');

Route::get('customers_report', 'App\Http\Controllers\admin\Customers_Report@index')->name("customers_report");
Route::post('Search_customers', 'App\Http\Controllers\admin\Customers_Report@Search_customers');

Route::get('MarkAsRead_all','App\Http\Controllers\admin\InvoicesController@MarkAsRead_all')->name('MarkAsRead_all');

Route::get('/{page}', [AdminController::class, 'index']);
