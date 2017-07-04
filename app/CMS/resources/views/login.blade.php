@extends('cms::layouts.login')

@section('content')
    {{ Form::open(['route' => 'login']) }}
    <div class="login-form">
        <div class="login-form--input">

            <input class="input" id="email" type="text" placeholder="{{ trans('admin_page.login_email_placeholder') }}" name="email">
            {!! printError($errors, 'email') !!}
        </div>

        <div class="login-form--input">
            <input class="input" id="password" type="password" placeholder="{{ trans('admin_page.login_password_placeholder') }}" name="password">
            {!! printError($errors, 'password') !!}
        </div>

            {!! printCustomErrors()  !!}

        <div class="login-form--button">
            <button class="button" type="submit">{{ trans('admin_page.login_button') }}</button>
        </div>
    </div>
    {{ Form::close() }}
@endsection