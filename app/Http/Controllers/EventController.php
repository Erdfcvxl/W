<?php
/**
 * Created by PhpStorm.
 * User: kestutis
 * Date: 5/5/2017
 * Time: 10:46 PM
 */

namespace App\Http\Controllers\Admin;


use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvents() {
        $events = Event::orderBy('date', 'asc')->get();
        return view('events', ['events' => $events]);
    }

    public function getAdminEvents() {
        $events = Event::orderBy('id', 'desc')->where('park_id', '=', getLoggedPark()->id);
        return view('admin.events', ['events' => $events]);
    }

    public function getParkEvants($park_id) {
        $events = Event::where('park_id', '=', $park_id)->get();
        return view('events', ['events' => $events]);
    }

    public function getEvent($id) {
        $event = Event::where('id', '=', $id)->first();
        return view('event', ['event' => $event]);
    }

    public function getCreateEvent() {
        return view('admin.createEvent');
    }

    public function getEditEvent($id) {
        $event = Event::find($id);
        return view('admin.editEvent', ['event' => $event, 'eventId' => $id]);
    }

    public function postCreateEvent(Request $request){
        $this->validate($request, [
            'park_id' => 'required',
            'event_category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'date' => 'required'
        ]);

        $event = new Event([
            'park_id' => $request->input('park_id'),
            'event_category' => $request->input('event_category'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'date' => $request->input('date')
        ]);

        $event->save();

        return redirect()->route('admin.events')->with('info', 'Event created: ' . $request->input('name'));
    }

    public function postEditEvent(Request $request) {
        $this->validate($request, [
            'park_id' => 'required',
            'event_category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'date' => 'required'
        ]);

        $event = Event::find($request->input('id'));
        $event->park_id = $request->input('park_id');
        $event->event_category = $request->input('event_category');
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->save();

        return redirect()->route('admin.events')->with('info', 'Event edited.');
    }

    public function getDeleteEvent($id) {
        $event = Event::find($id);
        $event->delete();
        return redirect() ->route('admin.events')->with('info', 'Event deleted');
    }

}