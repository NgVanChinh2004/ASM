<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\NewCategoryController;
use App\Http\Controllers\admin\NewController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LtController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TinController::class, 'index'])->middleware('auth')->name('home');
Route::get('/contact', [TinController::class, 'contact'])->name('contact');
Route::get('/about', [TinController::class, 'about'])->name('about');
// tin theo loại
Route::get('/shop/{idLT}', [TinController::class, 'shopByCategory'])->name('shop.byCategory');
// tin chi tiết
Route::get('/shopsingle/{id}', [TinController::class, 'shopsingle'])->name('shopsingle');
// loại tin trong trang tin tức
Route::get('/shop', [TinController::class, 'shop'])->name('shop');
// //đăng nhập
// Route::get('/login', [TinController::class, 'loginForm'])->name('loginForm');
// //đăng ký
// Route::get('/register', [TinController::class, 'registerForm'])->name('registerForm');



// route admin

// tin
Route::get('/dashboard', [NewController::class, 'index'])->middleware(['auth', 'auth.admin'])->name('admin.dashboard');
// add
Route::get('/add-news', [NewController::class, 'create'])->name('admin.dashboard.add');
Route::post('/add-news', [NewController::class, 'store']);
//update
Route::get('/news/{id}/edit', [NewController::class, 'edit'])->name('admin.dashboard.edit');
Route::post('/news/{id}', [NewController::class, 'update'])->name('admin.dashboard.update');
// delete
Route::delete('/destroy-news/{id}', [NewController::class, 'destroy'])->name('admin.dashboard.destroy');


// loại tin
Route::get('/list-new-category', [NewCategoryController::class, 'index'])->name('admin.newCategory.list');
// add
Route::get('/add-new-category', [NewCategoryController::class, 'create'])->name('admin.newCategory.add');
Route::post('/add-new-category', [NewCategoryController::class, 'store']);
// update
Route::get('/new-category/{id}/edit', [NewCategoryController::class, 'edit'])->name('admin.newCategory.edit');
Route::post('/new-category/{id}', [NewCategoryController::class, 'update'])->name('admin.newCategory.update');
// delete
Route::delete('/destroy-new-category/{id}', [NewCategoryController::class, 'destroy'])->name('admin.newCategory.destroy');


// User
Route::get('/list-user', [UserController::class, 'index'])->name('admin.user.list');
//add
Route::get('/add-new-user', [UserController::class, 'create'])->name('admin.user.add');
Route::post('/add-new-user', [UserController::class, 'store']);
// edit
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('admin.user.update');
// delete
Route::delete('/destroy-user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');


// đăng ký đăng nhập đăng xuất
Route::get('/register', [AuthController::class, 'RegisterForm'])->name('register');
Route::post('/register',[AuthController::class, 'register']);
Route::get('/login',    [AuthController::class, 'LoginForm'])->name('login');
Route::post('/login',   [AuthController::class, 'login']);


Route::post('/logout',  [AuthController::class, 'logout'])->name('logout');








//          Route::get('/', [TinController::class, 'index']);
//          Route::get('/shop/{id}', [TinController::class, 'shop']);
//          Route::get('/shopsingle/{id}', [TinController::class, 'shopsingle'])->name('shopsingle.ig');
//          Route::prefix('client')
//                      -> as('client')
//                    -> middleware('auth')
//                    ->group( function() {

//                    });

// Route::prefix('admin')
//     ->as('admin.')
//     ->middleware(['auth'])
//     ->group(function () {


//         Route::prefix('categories')
//             ->as('categories.')
//             ->controller(CategoryController::class)
//             ->group(function () {
//                 Route::get('categories', 'index')->name('index');
//                 Route::get('categories/create', 'create')->name('create');
//                 Route::get('categories/{id}', 'show')->name('show');
//                 Route::post('categories/store', 'store')->name('store');
//             });

//         Route::prefix('products')
//             ->as('products.')
//             ->controller(CategoryController::class)
//             ->group(function () {
//                 Route::get('products', 'index')->name('index');
//                 Route::get('products/create', 'create')->name('create');
//                 Route::get('products/{id}', 'show')->name('show');
//                 Route::post('products/store', 'store')->name('store');
//             });
//     });

// Route::get('test/{category}', function (Category $category) {
//     return $category;
// });