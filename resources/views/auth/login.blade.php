@extends('master')        
@section('title', 'Login')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="POST" action="{{ url('/users/login') }}">
                
                @include('shared.notification')

                <fieldset>
                    <legend>Login</legend>
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="password" name="password" value="{{ old('password') }}">
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>      
                </fieldset>
            </form>
        </div>
    </div>
@endsection