<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Model\user\Post;


class PostController extends Controller
{
    public function post(Post $post)
    {

        return view('user.post',compact('post'));
    }
}
