<?php
 
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoterController; 
use App\Admin\Controllers\VoterController as AdminVoterController; 

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::prefix('Voters')->group(function () {
        Route::get('', [VoterController::class, 'index'])->name('Voters');
        Route::get('create', [VoterController::class, 'create'])->name('Voters.create');
        Route::post('store', [VoterController::class, 'store'])->name('Voters.store');
        Route::get('show/{id}', [VoterController::class, 'show'])->name('Voters.show');
        Route::get('edit/{id}', [VoterController::class, 'edit'])->name('Voters.edit');
        Route::put('edit/{id}', [VoterController::class, 'update'])->name('Voters.update');
        Route::delete('destroy/{id}', [VoterController::class, 'destroy'])->name('Voters.destroy');
    });

    Route::prefix('admin/Voters')->group(function () {
        Route::get('admin/Voters', [AdminVoterController::class, 'index'])->name('AdminVoters');
        Route::get('create', [AdminVoterController::class, 'create'])->name('AdminVoters.create');
        Route::post('store', [AdminVoterController::class, 'store'])->name('AdminVoters.store');
        Route::get('show/{id}', [AdminVoterController::class, 'show'])->name('AdminVoters.show');
        Route::get('edit/{id}', [AdminVoterController::class, 'edit'])->name('AdminVoters.edit');
        Route::put('edit/{id}', [AdminVoterController::class, 'update'])->name('AdminVoters.update');
        Route::delete('destroy/{id}', [AdminVoterController::class, 'destroy'])->name('AdminVoters.destroy');
    });

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});
