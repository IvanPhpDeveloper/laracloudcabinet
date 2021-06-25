<?php

namespace App\Models\Model\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
return $this->belongsToMany(Post::class,'tag__posts')->onDelete("cascade");
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }


}
