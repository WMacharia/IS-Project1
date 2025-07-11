<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StallPaymentController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VendorPOSController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;



use App\Http\Controllers\AdminPasswordController;
use App\Http\Controllers\AdminAnalyticsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BookedProductsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BuyerLandingController;
use App\Http\Controllers\ExploreProductsController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\ManualAuthController;

Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/schedules', [SchedulesController::class, 'index'])->name('schedules');
Route::get('/schedules/{announcement_id}', [SchedulesController::class, 'show'])->name('schedules.show');

Route::get('/login-register', function () {
    return view('login-register');
});
Route::post('/login', [ManualAuthController::class, 'login'])->name('login.submit');
Route::post('/register', [ManualAuthController::class, 'register'])->name('register.submit');
Route::get('/buyer/landing', function () {
    return view('buyer/landing');
});



Route::get('/buyer/view-acc', function () {
    return view('buyer/view-acc');
});
Route::get('/buyer/edit', function () {
    return view('buyer/edit');
});

Route::get('/buyer/be-vendor', function () {
    return view('buyer/be-vendor');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/buyer/landing', [BuyerController::class, 'landing'])->name('buyer.landing');
Route::put('/buyer/update-profile', [BuyerController::class, 'updateProfile'])->name('buyer.update-profile');
Route::get('/buyer/search', [BuyerController::class, 'search'])->name('buyer.search');
// GET: to show the form
Route::get('/buyer/checkout', [BuyerController::class, 'checkout'])->name('buyer.checkout');

// POST: to handle the form submission



Route::post('/buyer/payment-loader', [BuyerController::class, 'paymentLoader'])->name('buyer.payment-loader');
Route::get('/buyer/payment-success', [BuyerController::class, 'paymentSuccess'])->name('buyer.payment.success');
Route::get('/buyer/download-receipt', [BuyerController::class, 'downloadReceipt'])->name('buyer.receipt.download');


Route::middleware(['auth:buyer'])->group(function () {
    Route::get('/buyer/be-vendor', [VendorController::class, 'create'])->name('buyer.be-vendor');
    Route::post('/buyer/be-vendor', [VendorController::class, 'store'])->name('buyer.be-vendor.submit');
});

Route::post('/buyer/bookProduct', [BuyerController::class, 'bookProduct'])->name('buyer.bookProduct');


Route::get('/buyer/b-products', [BookingController::class, 'index'])->name('buyer.b-products.index');
Route::delete('/buyer/bookings/{id}', [BookingController::class, 'destroy'])->name('buyer.bookings.destroy');


Route::get('/buyer/explore-products', [ExploreProductsController::class, 'index'])->name('buyer.explore-products');

Route::get('/buyer/schedules', [BuyerController::class, 'schedules'])->name('buyer.schedules');
Route::get('/buyer/show-schedules/{announcement_id}', [BuyerController::class, 'show'])->name('buyer.show-schedules');

Route::get('/vendor/schedules', [VendorController::class, 'schedules'])->name('vendor.schedules');
Route::get('/vendor/show-schedules/{announcement_id}', [VendorController::class, 'show'])->name('vendor.show-schedules');
Route::get('/vendor/v-landing', [VendorController::class, 'landing'])->name('vendor.landing');
Route::get('/vendor/dashboard', function () {
    $vendor = Auth::guard('buyer')->user()->vendor;
    $categories = Category::all(); // ✅ Add this line

    return view('vendor.dashboard', compact('vendor', 'categories'));
});

Route::get('/vendor/products', function() {
    return view('/vendor/products');
});
Route::get('/vendor/booked', function() {
    return view('/vendor/booked');
});
Route::get('/vendor/analytics', function() {
    return view('/vendor/analytics');
});
Route::get('/vendor/add-product', function() {
    return view('/vendor/add-product');
});
Route::get('/vendor/landing', [VendorController::class, 'landing'])->name('vendor.landing');
Route::put('/vendor/update-profile', [VendorController::class, 'updateProfile'])->name('vendor.update-profile');
Route::get('/vendor/profile', function() {
    return view('/vendor/profile');
});
Route::get('/vendor/edit', function() {
    return view('/vendor/edit');
});

Route::get('/vendor/search', [VendorController::class, 'search'])->name('vendor.search');

Route::put('/vendor/dashboard/update', [VendorController::class, 'update'])->name('vendor.update');

Route::middleware(['auth:buyer'])->group(function () {
    Route::get('/vendor/add-product', [ProductController::class, 'create'])->name('vendor.products.create');
    Route::post('/vendor/add-product', [ProductController::class, 'store'])->name('vendor.products.store');
});
Route::middleware(['auth:buyer'])->group(function () {
    Route::get('/vendor/products', [ProductController::class, 'index'])->name('vendor.products.index');
    Route::get('/vendor/products/{product}/edit', [ProductController::class, 'edit'])->name('vendor.products.edit');
    Route::put('/vendor/products/{id}', [ProductController::class, 'update'])->name('vendor.products.update');
    Route::put('/vendor/products/{product}', [ProductController::class, 'update'])->name('vendor.products.update');
    Route::delete('/vendor/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});


// Show available flea markets (announcements)
Route::get('/vendor/book-stall', [StallPaymentController::class, 'index'])->name('stall.select');

// Store the booking/payment
Route::post('/vendor/book-stall', [StallPaymentController::class, 'store'])->name('stall.store');

// Show form with selected flea market
Route::get('/vendor/book-stall/{announcement_id}', [StallPaymentController::class, 'create'])->name('stall.create');
Route::post('/vendor/stall-payment-loader', [StallPaymentController::class, 'paymentLoader'])->name('vendor.stall.payment.loader');
Route::get('/vendor/stall-payment-success', [StallPaymentController::class, 'paymentSuccess'])->name('vendor.stall.payment.success');




Route::get('/vendor/checkout', [VendorController::class, 'checkout'])->name('vendor.checkout');
Route::post('/vendor/payment-loader', [VendorController::class, 'paymentLoader'])->name('vendor.payment-loader');
Route::get('/vendor/payment-success', [VendorController::class, 'paymentSuccess'])->name('vendor.payment.success');


// DARAJA STK PUSH ROUTES
Route::post('/vendor/stall-stk-initiate', [StallPaymentController::class, 'initiateStkPush'])->name('vendor.stall.stk.initiate');
Route::post('/vendor/stall-stk-callback', [StallPaymentController::class, 'handleStkCallback'])->name('vendor.stall.stk.callback');

Route::get('/vendor/download-receipt', [StallPaymentController::class, 'downloadReceipt'])->name('vendor.receipt.download');



// POS pages
Route::get('/vendor/pos', [VendorPOSController::class, 'index'])->name('vendor.pos');
Route::post('/vendor/pos/sell', [VendorPOSController::class, 'recordSale'])->name('vendor.pos.sell');

Route::get('/vendor/pos/inventory', [VendorPOSController::class, 'inventoryPage'])->name('vendor.pos.inventory');
Route::post('/vendor/pos/inventory', [VendorPOSController::class, 'storeInventory'])->name('vendor.pos.inventory.store');
Route::get('/vendor/pos/analytics', [VendorPOSController::class, 'analytics'])->name('vendor.pos.analytics');

// Booked Products
Route::get('/vendor/booked', [BookedProductsController::class, 'index'])->name('vendor.booked.index');
Route::get('/vendor/booked-product/{product_id}', [BookedProductsController::class, 'show'])->name('vendor.booked-product.show');
Route::put('/vendor/booked-product/{id}/mark-paid', [BookedProductsController::class, 'markCommitmentPaid'])->name('vendor.markCommitmentPaid');



// Route::prefix('admin')->group(function () {
//     Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('/login', [AdminAuthController::class, 'login']);
//     Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

//     Route::middleware(['auth:admin'])->group(function () {
//         Route::get('/profile', function () {
//             return view('admin/profile'); // make this view too
//         })->name('admin.profile');
//     });
// });

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/profile', function () {
            return view('admin/profile'); 
        })->name('admin.profile');
        Route::get('/admin/change-password', [AdminPasswordController::class, 'showChangeForm'])->name('admin.password.change');
        Route::post('/admin/change-password', [AdminPasswordController::class, 'updatePassword'])->name('admin.password.update');

    });
    Route::get('/admin/analytics', [AdminAnalyticsController::class, 'analytics'])->name('admin.analytics');
    Route::get('/create-category', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/create-category', [CategoryController::class, 'store'])->name('admin.categories.store');
});


Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/announcements/{id}/edit', [AnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('/announcements/{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/announcements/{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');
    Route::get('/stall-bookings', [StallPaymentController::class, 'admin_index'])->name('stall-bookings.index');
    Route::get('/show-stall-bookings/{announcement}', [StallPaymentController::class, 'show'])->name('show-stall-bookings.show');
    Route::post('/verify-vendor/{vendor}', [StallPaymentController::class, 'verifyVendor'])->name('verifyVendor');
    Route::post('/unverify-expired-vendors', [StallPaymentController::class, 'unverifyExpiredVendors'])->name('unverifyExpiredVendors');


});

Route::post('/mpesa/callback', [StallPaymentController::class, 'handleMpesaCallback']);

