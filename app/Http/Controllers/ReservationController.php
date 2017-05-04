<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function getSchedule ()
    {
        if (Auth::check())
        {
            $reservation = new Reservation();
            $user = new User();
            $park_id = $user->getParkID(Auth::id());

            if ($park_id != 0) {
                $reservations = $reservation->getParkReservations($park_id);
                //echo $reservations;
                return view('schedule', ['reservations' => $reservations]);
            } else return back();
        } else return back();
    }

    public function postEditSchedule () {
    }
}