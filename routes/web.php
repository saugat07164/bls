<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ExpenseManager;
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::middleware(['auth', 'verified'])->group(function () {
     Route::get('/expenses', ExpenseManager::class)->name('expenses.index');
    Route::get('/dashboard', function () {
        $role = auth()->user()->primary_role;

        return match ($role) {
            'admin'    => redirect()->route('dashboard.admin'),
            'staff'    => redirect()->route('dashboard.staff'),
            'customer' => redirect()->route('dashboard.customer'),
            'visitor'  => redirect()->route('dashboard.visitor'),
            default    => redirect()->route('dashboard.visitor'), // fallback
        };
    })->name('dashboard');

    // Dashboard routes for specific roles
    Route::view('/dashboard/admin', 'dashboard.admin')
        ->middleware('role:admin')
        ->name('dashboard.admin');

    Route::view('/dashboard/staff', 'dashboard.staff')
        ->middleware('role:staff')
        ->name('dashboard.staff');

    Route::view('/dashboard/customer', 'dashboard.customer')
        ->middleware('role:customer')
        ->name('dashboard.customer');

    Route::view('/dashboard/visitor', 'dashboard.visitor')
        ->middleware('role:visitor')
        ->name('dashboard.visitor');

    // Admin User & Role CRUD
   // Route::get('/admin/users', UserCrud::class)->name('admin.users.index');
    //Route::get('/admin/roles', RoleCrud::class)->name('admin.roles.index');
});

require __DIR__.'/auth.php';
