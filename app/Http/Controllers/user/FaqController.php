<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Model\admin_faq\Category_faq;
use App\Models\Model\admin_faq\Question;
use Illuminate\Http\Request;

class FaqController extends Controller
{
        public function index()
    {
        $questions=Question::all();

        return view('user.user-faq.user-faq',compact('questions'));

    }
        public function category_faq(Category_faq $category_faq)
    {
        $questions = $category_faq->questions();
        return view('user.user-faq.user-faq',compact('questions'));
    }



}
