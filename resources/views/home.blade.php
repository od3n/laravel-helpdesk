@extends('master')
@section('title', 'Home')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            @include('shared.notification')

            <h2 class="header">Home Page</h2>

            @if (Auth::check())
                <p>Only visible for logged in users.</p>
            @else
                <h3>Demo Accounts</h3>
                <p>Email : agent1@example.com <br />Password : 123465</p>
                <p>Email : customer1@example.com <br />Password : 123465</p>
            @endif

        </div>
    </div>
@endsection