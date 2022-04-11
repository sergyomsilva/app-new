<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'title',
        'description',
        'url',
        'urlToImage',
        'content',
        'publishedAt',
    ];
}
