<?php


use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Crud\AddProductComponent;
use App\Http\Livewire\Crud\EditProductComponent;
use App\Http\Livewire\Crud\IndexComponent as CrudIndexComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexComponent::class)->name('index');

Route::get('/login/{id}', Login::class)->name('login');

Route::get('/register-user', Register::class)->name('register');

Route::get('/capturer-products', AddProductComponent::class)->name('capturer')->middleware('auth');

Route::get('/edit-product/{id}', EditProductComponent::class)->name('edit')->middleware('auth')->middleware('can:admin');

Route::get('/admin-products', CrudIndexComponent::class)->name('admin')->middleware('auth')->middleware('can:admin');
