<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PropertyController;
use App\Http\Middleware\SetPublicRootView;
use App\Http\Middleware\ShareSeoData;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes (uses public.blade.php layout)
|--------------------------------------------------------------------------
*/

Route::middleware([SetPublicRootView::class, ShareSeoData::class])->group(function () {
    // Public property browsing (Inertia)
    Route::get('/properti', [PropertyController::class, 'index'])->name('properties.index');
    Route::get('/properti/{property:slug}', [PropertyController::class, 'show'])->name('properties.show');
    Route::post('/properti/{property:slug}/inquiry', [InquiryController::class, 'store'])->name('inquiries.store');
});

// Static pages (Blade — fully server-rendered, outside Inertia middleware)
Route::middleware(ShareSeoData::class)->group(function () {
    Route::get('/', fn () => view('public.home'))->name('home');
    Route::get('/tentang-kami', fn () => view('public.about'))->name('about');
    Route::get('/layanan', fn () => view('public.services'))->name('services');
    Route::get('/kontak', fn () => view('public.contact'))->name('contact');
    Route::post('/kontak', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');
});

/*
|--------------------------------------------------------------------------
| Authenticated Dashboard Redirect
|--------------------------------------------------------------------------
*/

Route::get('dashboard', function () {
    $user = auth()->user();

    // Redirect to role-specific dashboard
    return match (true) {
        $user->isAdmin() => redirect()->route('admin.dashboard'),
        $user->isSeller() => redirect()->route('seller.dashboard'),
        default => redirect()->route('buyer.dashboard'),
    };
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Settings Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/settings.php';
