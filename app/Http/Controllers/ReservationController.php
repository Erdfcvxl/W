<?php

namespace App\Http\Controllers;

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

    public function getReservation($id){
        $reservation = Reservation::where('id', $id)->first();
        return view('', ['reservation' => $reservation]);
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

    public function postCreateReservation(Request $request) {
        $this->validate($request, [
            'park_id' => 'required',
            'start_time' => 'required',
            'duration' => 'required',
            'status' => 'required'
        ]);

        $reservation = new Reservation([
            'user_id'=> getLoggedUser()->id,
            'temp_user_id' =>0, //Sugalvot ka daryt del temp useriu
            'park_id' => $request->input('park_id'),
            'start_time' => $request->input('start_time'),
            'duration' => $request->input('duration'),
            'status' => $request->input('status')
        ]);

        $reservation->save();

        return redirect()->route('reservations')->with('info', 'Reservation created');
    }

    public function postEditReservation(Request $request) {
        $this->validate($request, [
            'park_id' => 'required',
            'start_time' => 'required',
            'duration' => 'required',
            'status' => 'required'
        ]);

        $reservation = Reservation::find($request->input('id'));
        $reservation->start_time = $request->input('start_time');
        $reservation->duration = $request->input('duration');
        $reservation->save();
        return redirect()->route('reservations')->with('info', 'Reservation time updated');
    }
}