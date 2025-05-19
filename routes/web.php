<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware('auth', 'role:admin'); // Only allow access to admin users
Route::get('/agent/dashboard', [\App\Http\Controllers\AgentController::class, 'dashboard'])
    ->name('agent.dashboard')
    ->middleware('auth', 'role:agent'); // Only allow access to agent users



Route::get('/dashboard', function () {
    return view('dashboard'); // Ensure this view exists
})->middleware(['auth'])->name('dashboard');

Route::get('/restricted', function () {
    return view('restricted');
})->middleware(['auth', 'verified'])->name('restricted'); // Requires email verification

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/agent/become', [\App\Http\Controllers\AgentController::class, 'showCategoryForm'])->name('agent.become');
    Route::post('/agent/become', [\App\Http\Controllers\AgentController::class, 'storeCategory'])->name('agent.become.store');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email'); // Ensure this view exists
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // Mark the email as verified
    return redirect('/dashboard'); // Redirect to the dashboard
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__ . '/auth.php';
