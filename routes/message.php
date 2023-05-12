<?php

use App\Http\Controllers\Message\Message;

Route::get('/message', [Message::class, 'index']);