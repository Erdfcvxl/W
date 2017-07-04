@extends('cms::layouts.main')

@section('content')

    {{ Form::open(['url' => route('cms.park.update', $formItem->id), 'method' => 'PUT']) }}

    <div class="inner--dashboard">
        <div class="inner--dashboard---input">
            {{ Form::label('name', trans('admin_page.park_name')) }}
            {{ Form::text('name', $formItem->name, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---input">
            {{ Form::label('city', trans('admin_page.park_city')) }}
            {{ Form::text('city', $formItem->city, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---input">
            {{ Form::label('address', trans('admin_page.park_address')) }}
            {{ Form::text('address', $formItem->address, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---input">
            {{ Form::label('working_hours', trans('admin_page.park_working_hours')) }}
            {{ Form::text('working_hours', $formItem->working_hours, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---input">
            {{ Form::label('website', trans('admin_page.park_website')) }}
            {{ Form::text('website', $formItem->website, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---input">
            {{ Form::label('facebook_link', trans('admin_page.park_facebook_link')) }}
            {{ Form::text('facebook_link', $formItem->facebook_link, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---input">
            {{ Form::label('latitude', trans('admin_page.park_latitude')) }}
            {{ Form::text('latitude', $formItem->latitude, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---input">
            {{ Form::label('longitude', trans('admin_page.park_longitude')) }}
            {{ Form::text('longitude', $formItem->longitude, ['class' => 'input']) }}
        </div>
        <div class="inner--dashboard---button">
            {{ Form::submit(trans('admin_page.submit_button'), ['class' => 'button']) }}
        </div>
    </div>

    {{ Form::close() }}

@endsection