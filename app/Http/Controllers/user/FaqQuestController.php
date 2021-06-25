<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Model\admin_faq\Question;
use Illuminate\Http\Request;

class FaqQuestController extends Controller
{
    public function question(Question $question)
    {

        return view('user.user-faq.user-faquestion',compact('question'));
    }
}
