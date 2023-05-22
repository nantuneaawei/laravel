<?php

namespace App\Repositories\MyDB;

use App\Models\MyDB\Message as MessageModels;

class Message
{
    private $oMessageModels;

    public function __construct(MessageModels $_oMessageModels)
    {
        $this->oMessageModels = $_oMessageModels;
    }

    public function insertMember($_sEmail, $_sPassword, $_sUserName)
    {
        $bMemberinfo = $this->oMessageModels
            ->insert(['UserName' => $_sUserName,'Password' => $_sPassword,'Email' => $_sEmail]);
        return $bMemberinfo;
    }

    public function checkEmail($_sEmail)
    {
        $iCheckEmail = $this->oMessageModels
        ->where('Email', '=', $_sEmail)
        ->count();

        return $iCheckEmail;
    }
}