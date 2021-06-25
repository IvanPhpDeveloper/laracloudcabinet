<?php


namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;


class RegistrationPageController extends Controller
{
    public function index(){
        return view('user.user-register.user-reg');
    }
}
