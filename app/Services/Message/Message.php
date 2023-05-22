<?php

namespace App\Services\Message;

use App\Repositories\MyDB\Message as MessageRepositories;

class Message
{
    private $oMessageRepositories;

    public function __construct(MessageRepositories $_oMessageRepositories)
    {
        $this->oMessageRepositories = $_oMessageRepositories;
    }

    public function insertMember($_sEmail, $_sPassword, $_sUserName)
    {
        $bMemberinfo = $this->oMessageRepositories->insertMember($_sEmail, $_sPassword, $_sUserName);
        if ($bMemberinfo) {
            $sResult = "註冊成功!";
            $bState = true;
        } else {
            $sResult = "註冊失敗!";
            $bState = false;
        }

        return ['state' => $bState, 'message' => $sResult];
    }

    public function checkEmail($_sEmail)
    {
        $iResult = $this->oMessageRepositories->checkEmail($_sEmail);

        if ($iResult == 0) {
            $sResult = "信箱格式符合規定, 不存在, 可以以使用此信箱!";
            $bState = true;
        } else {
            $sResult = "信箱格式符合規定, 存在, 不可以以使用此信箱!";
            $bState = false;
        }
        return ['state' => $bState, 'message' => $sResult];
    }
}