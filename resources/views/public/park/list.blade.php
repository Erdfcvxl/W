@extends ('layouts.public')

@section('content')
    Todo:
    <h2>Greitieji filtrai <small>(turbūt mygtuko pavidalu)</small></h2>
    Rasti arčiausiai esančius parkus<br>
    Rasti geriausiai vertinamus parkus<br>
    Rasti pigiausius parkus<br>

    <h3>Daugiau filtrų <small>(turbūt išsiskleidžiantis boxas)</small></h3>

    Rasti parką pagal pavadinimą
    <br>

    Rasti parką pagal miestą
    <br><br>

    Rušiuoti parkus pagal<br>
    Įvertinimą(-us)<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Bendrą
    &nbsp;&nbsp;&nbsp;&nbsp;Figūrų
    &nbsp;&nbsp;&nbsp;&nbsp;Sistemos
    &nbsp;&nbsp;&nbsp;&nbsp;Vandens
    &nbsp;&nbsp;&nbsp;&nbsp;Aplinkos
    &nbsp;&nbsp;&nbsp;&nbsp;Staff'o

    <hr>

    {!! Form::model($parkFilter, ['route' => 'filterParks', 'id' => 'park-filters']) !!}
        {{ Form::token() }}

        {{ Form::checkbox('sort_by', 'nearby') }} Rasti arčiausiai esančius parkus<br>
        {{ Form::checkbox('sort_by', 'reviews') }} Rasti geriausiai vertinamus parkus<br>
        {{ Form::checkbox('sort_by', 'price') }} Rasti pigiausius parkus<br>

        <br>

        {!! Form::text('name') !!}<br>
        {!! Form::select('city') !!}<br><br>

        {!! Form::button('filter', ['type' => 'submit']) !!}<br>

    {!! Form::close() !!}


    <div id="park-list">

    </div>
@stop