@extends('layouts.landing_1')

@section('content')
    <div class="logo">
        <h1>Wake<br>Lit</h1>
        <h4>Wake parkai Lietuvoje</h4>
    </div>


    <div class="landing-page">
        <div class="landing-page--primary-button">
            @include('public.elements.button', [
                'href' => '#',
                'label' => 'Parkai',
                'class' => 'rhombus-button---big'
            ])
        </div>

        <div class="landing-page--secondary-button">
            @include('public.elements.button', [
                'href' => '#',
                'label' => 'Apie wake',
                'class' => ''
            ])
        </div>

        <div class="landing-page--tertiary-button">
            @include('public.elements.button', [
                'href' => '#',
                'label' => 'Media',
                'class' => 'rhombus-button---small'
            ])
        </div>
    </div>



@stop