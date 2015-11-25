@extends('master')        
@section('title', 'Profile')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="POST" action="{{ url('/users/profile') }}">

                @include('shared.notification')

                <fieldset>
                    <legend>Profile</legend>
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection