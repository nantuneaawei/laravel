<?php

namespace App\Models\MyDB;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //指定連接的DB名稱
    protected $connection = 'mysql';
    //指定Table名稱
    protected $table = 'Message';
    //主鍵名稱
    protected $primaryKey = 'ID';
    //對應現有DB設定
    public $timestamps = false;
}