<?php

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Session;

function getLoggedUser()
{
    return Auth::user();
}

function getLoggedPark()
{
    $user = new User();
    return $user->getPark(Auth::id());
}

function printError($errors, $arg)
{
    if ($errors->has($arg)){
        return '<span class="login-form--error">' . $errors->first($arg) . '</span>';
    }
}

function printCustomErrors() {
    if(Session::has('custErrors')) {
        return '<span class="login-form--error">' . Session::get('custErrors') .'</span>';
    }
}

?>