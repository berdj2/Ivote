<?php
 
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoterController; 
use App\Admin\Controllers\VoterController as AdminVoterController; 
use App\Http\Controllers\FeedbackController;

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
        Route::get('', [AdminVoterController::class, 'index'])->name('Voters');
        Route::get('create', [VoterController::class, 'create'])->name('Voters.create');
        Route::post('store', [AdminVoterController::class, 'store'])->name('Voters.store');
        Route::get('show/{id}', [AdminVoterController::class, 'show'])->name('Voters.show');
        Route::get('edit/{id}', [AdminVoterController::class, 'edit'])->name('Voters.edit');
        Route::put('edit/{id}', [AdminVoterController::class, 'update'])->name('Voters.update');
        Route::delete('destroy/{id}', [AdminVoterController::class, 'destroy'])->name('Voters.destroy');
        Route::get('/feedback', [FeedbackController::class, 'showFeedbackForm'])->name('feedback.form');
        Route::post('/feedback', [FeedbackController::class, 'submitFeedback'])->name('feedback.submit');

    });

   

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});

// Route::resource('Voters', VoterController::class);