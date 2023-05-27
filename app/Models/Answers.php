<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questions;
class Answers extends Model
{
    use HasFactory;
    protected $fillable = array('content','questions_id');
    public static $rules = array('content' => 'required|min:15');
    public function question(){
        return $this->belongTo(Questions::class);
    }
}
