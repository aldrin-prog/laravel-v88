<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone', 'address',
    ];
    public static $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:customers',
        'phone' => 'required|regex:/^[0-9]{10}$/',
        'address' => 'required',
    ];
}
