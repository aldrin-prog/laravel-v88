<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use Faker\Factory as Faker;
use App\Models\Customer;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/customers',function(){
    $customers = Customer::all();
    dd($customers);
    return '';
});
Route::get('/customers/first',function(){
    $firstCustomer = Customer::first();
    dd($firstCustomer);
    return '';
});
Route::get('/customers/last',function(){
    $lastCustomer= Customer::orderBy('id','DESC')->first();
    dd($lastCustomer);
    return '';
});
Route::get('/customers/sorts',function(){
    $sorted= Customer::orderBy('name','ASC')->get();
    dd($sorted);
    return '';
});
Route::get('/update-customer-name', function () {
    $faker = Faker::create();
    $customer = Customer::find(5);
    $customer->name = $faker->name;
    if ($customer->save()){
        return 'Successfully updated customer Id 5';
    }
    else{
        return 'Fail to update customer Id 5';
    }

});
Route::get('/destroy',function(){
    $customer = Customer::find(4);
    try {
        //code...
        $customer->delete();
        return 'Successfully Deleted';
    } catch (\Throwable $th) {
        //throw $th;
        return 'Something went wrong or Missing id';
    }
    
});