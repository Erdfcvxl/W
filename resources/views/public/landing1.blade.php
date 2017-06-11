@extends('layouts.landing_1')

@section('content')
    <div class="logo">
        <h1 class="logo--heading">Wake<br>Lit</h1>
        <h4 class="logo--sub-heading">Wake parkai Lietuvoje</h4>
    </div>


    <div class="landing-page">
        <div class="landing-page--primary-button">
            @include('public.elements.button', [
                'href' => route('parks'),
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
                'class' => ''
            ])
        </div>
    </div>



@stop