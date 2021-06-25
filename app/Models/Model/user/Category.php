<?php

namespace App\Models\Model\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class,'category__posts')->onDelete("cascade")->paginate(5);
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
