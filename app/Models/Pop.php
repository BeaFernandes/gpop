<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public static function all()
    {
        return Pop::all();
    }
    
}
