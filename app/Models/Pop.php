<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Pop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'key_word',
        'description',
        'image',
        'categories_id',
    ];

    public function getCategory()
    {
        return Category::find($this->categories_id)->title;
    }
    
}
