<?php
use App\Http\Controllers\VoterController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use OpenAdmin\Admin\Facades\Admin;
use App\Admin\Controllers\VoterController as AdminVoterController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    
    Route::get('admin/Voters', [AdminVoterController::class, 'index'])->name('AdminVoters');
    $router->resource('voters', VoterController::class);
});
