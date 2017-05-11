<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function getAdminReservations()
    {
        if (Auth::check())
        {
            $reservation = new Reservation();
            if (getLoggedPark()->id != 0)
                return view('schedule',
                    ['reservations' => $reservation->getParkReservations(getLoggedPark()->id)]);
            else return view('auth/home');
        } else return view('auth/login');
    }

    public function getReservations () {
        $reservations = Reservation::where('user_id', getLoggedUser()->id);
        return view('reservations', ['reservations' => $reservations]);
    }

    public function getCreateReservation(){
        return view('createReservation');
    }

    public function getEditReservation($id) {
        $reservation = Reservation::find($id);
        return view('editReservation', ['reservation' => $reservation, 'reservationId' => $id]);
    }

    public function getDeleteReservation($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservations')->with('info', 'Reservation deleted.');
    }

    public function postCreateReservation(ReservationRequest $request) {
        /*
        $this->validate($request, [
            'park_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'status' => 'required'
        ]);
        */

        $reservation = new Reservation([
            'user_id'=> getLoggedUser()->id,
            'temp_user_id' =>0, //Sugalvot ka daryt del temp useriu
            'park_id' => $request->input('park_id'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'duration' => $request->input('duration'),
            'status' => $request->input('status')
        ]);

        $reservation->save();

        return redirect()->route('reservations')->with('info', 'Reservation created');
    }

    public function postEditReservation(ReservationRequest $request) {
        /*
        $this->validate($request, [
            'park_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'status' => 'required'
        ]);
        */

        $reservation = Reservation::find($request->input('id'));
        $reservation->date = $request->input('date');
        $reservation->time = $request->input('time');
        $reservation->duration = $request->input('duration');
        $reservation->save();
        return redirect()->route('reservations')->with('info', 'Reservation time updated');
    }
}