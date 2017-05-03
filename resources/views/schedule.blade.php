@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table>
                <tr>
                    <th>Park ID</th>
                    <th>Start Time</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>User ID</th>
                    <th>Temporary User ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Phone Number</th>
                </tr>
                @foreach($reservations as $reservation)
                    <tr>
                        <th>{{$reservation->park_id}}</th>
                        <th>{{$reservation->start_time}}</th>
                        <th>{{$reservation->duration}}</th>
                        <th>{{$reservation->status}} </th>
                        <th>{{$reservation->user_id}} </th>
                        <th>{{$reservation->temp_user_id}}</th>
                        <th>{{ $reservation->name }}</th>
                        <th>{{ $reservation->surname }}</th>
                        <th>{{ $reservation->phone_number }}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection