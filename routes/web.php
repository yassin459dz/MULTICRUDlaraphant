<?php
use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\ViewCustomers;
use App\Livewire\Edit;
use App\Livewire\Cars;
use App\Livewire\CreateCar;
use App\Livewire\ViewCars;
use App\Livewire\EditCar;
use App\Livewire\MultiStep;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers',Customers::class);
Route::get('/customers/create',CreateCustomer::class);
Route::get('/customers/{customer}',ViewCustomers::class);
Route::get('/customers/{customer}/edit',Edit::class);

Route::get('/cars',Cars::class);
Route::get('/cars/create',CreateCar::class);
Route::get('/cars/{car}',ViewCars::class);
Route::get('/cars/{car}/edit',EditCar::class);

Route::get('/multi',MultiStep::class);
