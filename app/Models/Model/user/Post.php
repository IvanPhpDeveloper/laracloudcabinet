<?php

namespace App\Models\Model\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag__posts')->withTimestamps();

    }

    public function categories(){
        return $this->belongsToMany(Category::class,'category__posts')->withTimestamps();
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
