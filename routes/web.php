<?php

use App\Http\Controllers\ProductController;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setup', function () {
    // $role = Role::create(['name' => 'buyyer']);
    // $permission = Permission::create(['name' => 'buy item']);

    // $role->givePermissionTo($permission);
    // $permission->assignRole($role);

    $user = User::first();
    
    // $permissionNames = $user->getPermissionNames(); // collection of name strings
    // $permissions = $user->permissions; // collection of permission objects

    $user->assignRole('buyyer');

    dd(
        $user->can('buy item'),
    );
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::resource('products', ProductController::class);
});
