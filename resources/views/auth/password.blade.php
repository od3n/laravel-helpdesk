@extends('master')        
@section('title', 'Forgot Password')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="POST" action="{{ url('/password/email') }}">
                
                @include('shared.notification')

                <fieldset>
                    <legend>Forgot Password</legend>
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                        </div>
                    </div>      
                </fieldset>
            </form>
        </div>
    </div>
@endsection