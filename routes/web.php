<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });





//auth

Route::get('/',  [HomeController::class,'index']);


Route::post('login',  [HomeController::class,'login']);
// Route::get('login',  [HomeController::class,'login_index']);
Route::get('login',  [HomeController::class,'login_index'])->name('login');
Route::post('register',  [HomeController::class,'register']);
Route::get('register',  [HomeController::class,'register_index']);
Route::get('log-out',  [HomeController::class,'logout']);
Route::post('reset-password-now',  [HomeController::class,'reset_password_now']);
Route::post('reset-password',  [HomeController::class,'reset_password']);
Route::get('expired',  [HomeController::class,'expired']);
Route::get('verify-password',  [HomeController::class,'verify_password']);
Route::get('forgot-password',  [HomeController::class,'forget_password']);
Route::get('faq',  [HomeController::class,'faq']);
Route::get('terms',  [HomeController::class,'terms']);
Route::get('policy',  [HomeController::class,'policy']);
Route::get('rules',  [HomeController::class,'rules']);
Route::post('update-password-now',  [HomeController::class,'update_password_now']);

Route::get('verify-qr-code',  [AgentController::class,'verify_qr']);
Route::post('check-out',  [AgentController::class,'check_out']);
Route::post('check-in',  [AgentController::class,'check_in']);




















Route::group(['middleware' => ['auth', 'user', 'session.timeout']], function () {


Route::get('welcome',  [HomeController::class,'welcome_index']);
Route::get('fund-wallet',  [HomeController::class,'fund_wallet']);
Route::get('fund-account',  [HomeController::class,'fund_wallet']);
Route::get('profile',  [HomeController::class,'profile']);
Route::post('fund-now',  [HomeController::class,'fund_now']);
Route::get('verify',  [HomeController::class,'verify_payment']);
Route::post('session-resolve',  [HomeController::class,'session_resolve']);
Route::get('change-password',  [HomeController::class,'change_password']);
Route::get('item',  [ItemController::class,'item']);


Route::get('agent-dashboard',  [AgentController::class,'agent_dashboard']);
Route::get('add-event',  [AgentController::class,'add_event']);
Route::post('save-event',  [AgentController::class,'save_event']);
Route::get('view-ticket',  [AgentController::class,'view_ticket']);


Route::get('add-ticket',  [AgentController::class,'add_ticket']);
Route::post('save-ticket',  [AgentController::class,'save_ticket']);










});





























//admin
Route::get('admin',  [AdminController::class,'index']);

Route::get('admin-dashboard',  [AdminController::class,'admin_dashboard']);

Route::get('caterogies',  [AdminController::class,'categories']);

Route::post('add-new-cat',  [AdminController::class,'add_new_cat']);
Route::get('delete-cat',  [AdminController::class,'delete_cat']);

Route::get('products',  [AdminController::class,'index_product']);
Route::post('delete-product',  [AdminController::class,'delete_product']);

Route::post('add-new-pr',  [AdminController::class,'add_new_pr']);
Route::post('delete-pr',  [AdminController::class,'delete_pr']);

Route::get('delete-front-pr',  [AdminController::class,'delete_front_pr']);

Route::get('delete-pr',  [AdminController::class,'delete_pro']);

Route::get('delete-main',  [AdminController::class,'delete_main']);


Route::post('search-user',  [AdminController::class,'search_user']);
Route::post('search-username',  [AdminController::class,'search_username']);












Route::get('users',  [AdminController::class,'index_user']);
Route::get('view-user',  [AdminController::class,'view_user']);
Route::post('update-user',  [AdminController::class,'update_user']);
Route::post('remove-user',  [AdminController::class,'remove_user']);




Route::post('edit-front-pr',  [AdminController::class,'edit_front_product']);





Route::post('admin-login',  [AdminController::class,'admin_login']);

















//product

Route::post('buy-now',  [ProductController::class,'buy_now']);
Route::post('item-view',  [ProductController::class,'item_view']);

Route::get('item-view',  [ProductController::class,'i_view']);

Route::get('allcatproduct',  [ProductController::class,'view_all_product']);

Route::post('add-new-product',  [ProductController::class,'add_new_product']);

Route::post('add-front-product',  [ProductController::class,'add_front_product']);

Route::get('detete-front-product',  [ProductController::class,'delete_front_product']);


Route::post('edit-new-product',  [ProductController::class,'edit_front_product']);


//Route::get('view-all',  [ProductController::class,'view_all_product']);


Route::post('/telegram', 'TelegramBotController@handle');
































