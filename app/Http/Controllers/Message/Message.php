<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;

class Message extends Controller
{
    public function index()
    {
        return view('message.index');
    }

    public function login()
    {
        return view('message.member_login');
    }

    public function register()
    {
        return view('message.member_register');
    }

    public function member()
    {
        return view('message.member');
    }
}