<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
class Book extends Model
{
    use HasFactory;
    protected $fillable=['title','author','publisher','category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public static function create(array $attributes=[]){
       $validator = Validator::make($attributes, [
        'title' => 'required|min:3',
        'author' => 'required',
        'publisher' => 'required',
    ]);

    if ($validator->fails()) {
        
        return var_dump($validator->messages());
    }
    return parent::query()->create($attributes);
    }
}
