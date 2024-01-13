<?php

namespace App\Models;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image',
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'book_categories');
    }

}
