<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\AdminAuthenticationController;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\ProfileController;

    Route::group(['prefix' => 'admin', 'as'=>'admin.'], function(){
        Route::get('login', [AdminAuthenticationController::class, 'login'])->name('login');
        Route::post('login', [AdminAuthenticationController::class, 'handleLogin'])->name('handle-login');
        Route::post('logout', [AdminAuthenticationController::class, 'logout'])->name('logout');

    });

    Route::group(['prefix' => 'admin', 'as'=>'admin.', 'middleware' => ['admin']], function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::put('profile-password-update/{id}', [ProfileController::class, 'passwordUpdate'])->name('profile-password-update');
        Route::resource('profile', ProfileController::class);

    });