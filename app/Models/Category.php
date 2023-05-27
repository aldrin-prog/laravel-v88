<?php

namespace App\Models;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function books(){
        return $this->hasMany(Book::class);
    }
    public function delete(){
        foreach ($this->books as $book) {
            $book->delete();
        }
        return parent::delete();
    }
}
