<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function getSchedule () {
        $reservation = new Reservation();
        $user = Auth::user(); //logged in user
        //$park_id = User::getParkIdByUserId($user->email);
        //pamirsau sutvarkyt, imesiu pabaigta penktadieni/savaitgali
        $reservations = $reservation->getParkReservations(1);
        return view('schedule', ['reservations' => $reservations]);
    }

    public function postEditSchedule () {
    }
}
