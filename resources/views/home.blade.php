@extends('master')
@section('title', 'Home')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            @include('shared.notification')

            <h2 class="header">Home Page</h2>

            @if (Auth::check())
                <p>Only visible for logged in users.</p>
            @endif

        </div>
    </div>
@endsection