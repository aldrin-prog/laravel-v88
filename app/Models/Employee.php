<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
class Employee extends Model
{
    use HasFactory;
    protected $fillable=['name','age','job_title','department'];
    public static $rules=[
        'name' => 'required',
        'age' => 'required',
        'job_title'=>'required',
        'department'=>'required'
    ];
    public static function create(array $attributes=[]){
        $validator = Validator::make($attributes, self::$rules);
        if ($validator->fails()) {
            $request->session()->flash('error',$validator->messages());
            return false;
        }
        return parent::query()->create($attributes);
    }
}
