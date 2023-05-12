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
}