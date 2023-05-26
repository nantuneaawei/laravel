<?php

namespace App\Http\Controllers\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Message\Message as MessageServices;
use App\Repositories\MyDB\Message as MessageRepositories;

class Message extends Controller
{
    private $oMessageServices;
    private $oMessageRepositories;

    public function __construct(MessageServices $_oMessageServices, MessageRepositories $_oMessageRepositories)
    {
        $this->oMessageServices = $_oMessageServices;
        $this->oMessageRepositories = $_oMessageRepositories;
    }

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

    public function registerMember(Request $_oRequest)
    {
        $sEmail     = $_oRequest->input('Email');
        $sPassword  = $_oRequest->input('Password');
        $sUserName  = $_oRequest->input('UserName');
        
        $aResult = $this->oMessageServices->insertMember($sEmail, $sPassword, $sUserName);
        
        $bState = $aResult['state'];
        $sMessage = $aResult['message'];

        return response()->json(['state' => $bState, 'message' => $sMessage]);
    }

    public function checkEmail(Request $_oRequest)
    {
        $sEmail = $_oRequest->input('Email');

        $aResult = $this->oMessageServices->checkEmail($sEmail);

        $bState = $aResult['state'];
        $sMessage = $aResult['message'];
        return response()->json(['state' => $bState, 'message' => $sMessage]);
    }

    public function loginMember(Request $_oRequest)
    {
        $sEmail     = $_oRequest->input('Email');
        $sPassword  = $_oRequest->input('Password');

        $aResult = $this->oMessageServices->loginMember($sEmail, $sPassword);
        
        $bState = $aResult['state'];
        $sMessage = $aResult['message'];

        return response()->json(['state' => $bState, 'message' => $sMessage]);
    }
}