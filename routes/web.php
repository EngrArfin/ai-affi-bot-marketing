<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PayoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShortlinkController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\NotSubscribed;
use App\Http\Middleware\ProtectedMiddleware;
use App\Http\Middleware\SubscriptionProtected;
use Illuminate\Support\Facades\Route;

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

Route::get('/shortlinks/{link}',[ShortlinkController::class,'link']);

Route::middleware(AuthMiddleware::class)->group(function(){
    Route::get('/', function () {
        return view('page.index');
    });
    Route::get('/signup', function () {
        return view('page.registration');
    });
    Route::post('/signup',[AuthController::class,'register']);
    Route::get('/verify-email',[AuthController::class,'verify_email_view']);
    Route::post('/verify-email',[AuthController::class,'verify_email']);
    Route::get('/signin',function () {
        return view('page.login');
    });
    Route::post('/signin',[AuthController::class,'login']);
});

Route::middleware(ProtectedMiddleware::class)->group(function(){
    Route::get('/subscribe/{id}',function($id){
        return view('page.buy-subscription');
    });
    Route::post('/subscribe/{id}',[SubscriptionController::class,'subscribe']);
    Route::middleware(NotSubscribed::class)->group(function(){
        Route::get('/subscriptions',[SubscriptionController::class,'index']);
    });

    Route::prefix('/dashboard')->middleware(SubscriptionProtected::class)->group(function(){
        Route::get('/',function(){
            return view('dashboard.index');
        });
        Route::get('/upgrade',function(){
            return view('dashboard.update');
        });
        Route::post('/create-shortlink',[ShortlinkController::class,'create']);
        Route::get('/commissions',function(){
            return view('dashboard.commisions');
        });
        Route::get('/payout',function(){
            return view('dashboard.payout');
        });
        Route::post('/payout',[PayoutController::class,'payout']);
        Route::get('/support',function(){
            return view('dashboard.support');
        });
    });

    Route::get('/logout',[AuthController::class,'logout']);
});

Route::prefix('/admin')->group(function(){
    Route::get('/login',[AuthController::class,'admin_login_view']);
    Route::get('/logout',[AuthController::class,'admin_logout']);
    Route::post('/login',[AuthController::class,'admin_login']);
    Route::middleware(AdminMiddleware::class)->group(function(){
        Route::get('/',[ProductController::class,'all']);
        Route::get('/add-product',function(){
            return view('admin.pages.add-product');
        });
        Route::post('/add-product',[ProductController::class,'create']);
        Route::get('/all-users',function(){
            return view('admin.pages.all-users');
        });
        Route::get('/ad-partners',function(){
            return view('admin.pages.ad-partners');
        });
        Route::get('/ecom-partners',function(){
            return view('admin.pages.ecom-partners');
        });
        Route::get('/commissions',[AdminController::class,'commission']);
        Route::get('/payout',[AdminController::class,'payout_view']);
        Route::post('/payout',[AdminController::class,'payout']);
    });
});

Route::prefix('/checkout')->group(function(){
    Route::get('/', function () {
        return redirect('/checkout/1');
    });
    Route::post('/',[ProductController::class,'checkout']);

    Route::get('/{id}',function(){
        return view('ecommerce.checkout',[
            "id" => request()->route('id')
        ]);
    });
});

Route::prefix('/product')->group(function(){
    Route::get('/1',function(){
        return view('ecommerce.single');
    });
    Route::get('/2',function(){
        return view('ecommerce.single');
    });
    Route::get('/3',function(){
        return view('ecommerce.single');
    });
    Route::get('/4',function(){
        return view('ecommerce.single');
    });
    Route::get('/5',function(){
        return view('ecommerce.single');
    });
});

Route::get('/all-sessions',[SubscriptionController::class,'all_sessions']);
