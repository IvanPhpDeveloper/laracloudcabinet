<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Model\user\Category;
use App\Models\Model\user\Post;
use App\Models\Model\user\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index()
    {
        $posts=Post::paginate(2);

        return view('user.blog',compact('posts'));

    }
    public function tag(Tag $tag)
    {


        $posts = $tag->posts();
        return view('user.blog',compact('posts'));


    }
    public function category(Category $category)
    {
        $posts = $category->posts();
        return view('user.blog',compact('posts'));


    }
}
