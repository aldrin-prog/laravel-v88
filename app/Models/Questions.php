<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forums;
use App\Models\Answer;
class Questions extends Model
{
    use HasFactory;
    protected $fillable = array('content','forums_id');
    public static $rules = array('content' => 'required|min:7');
    public function forum(){
        return $this->belongsTo(Forums::class);
    }
    public function answer(){
        return $this->hasMany(Answers::class);
    }
    
}
