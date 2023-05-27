<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questions;
class Forums extends Model
{
    use HasFactory;
    protected $fillable = array('title','description');
    public static $rules = array('title' => 'required','description'=>'required');
    public function question(){
        return $this->hasOne(Questions::class);
    }
}
