<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    function users(){
        return $this->belongsToMany(User::class);
    }
    function categories(){
        return $this->belongsToMany(Category::class);
    }
    function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
