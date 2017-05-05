<?php

use Illuminate\Support\Facades\Auth;
use App\User;

function getLoggedUser(){
    return Auth::user();
}

function getLoggedPark() {
    $user = new User();
    return $user->getPark(Auth::id());
}

?>