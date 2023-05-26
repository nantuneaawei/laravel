<?php

use App\Http\Controllers\Message\Message;

Route::get('/message', [Message::class, 'index']);
Route::get('/login', [Message::class, 'login']);

Route::get('/register', [Message::class, 'register']);
Route::post('/registerMember',[Message::class, 'registerMember']);
Route::get('/checkEmail',[Message::class, 'checkEmail']);

Route::post('/loginMember',[Message::class, 'loginMember']);

Route::get('/member', [Message::class, 'member']);