<?php

use App\Http\Controllers\Message\Message;

Route::get('/message', [Message::class, 'index']);
Route::get('/login', [Message::class, 'login']);