<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable =[
        'title',
        'slug',
        'content',
        'author',
        'category_id',
    ];
    public function categories()
    {
        return $this->belongTo(Category::class, 'category_id', 'id');
    }
}