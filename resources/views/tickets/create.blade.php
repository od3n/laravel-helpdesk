@extends('master')        
@section('title', 'Submit a new Ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="POST" action="{{ url('/tickets') }}">
                
                @include('shared.notification')

                <fieldset>
                    <legend>Submit a new Ticket</legend>
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="title" name="title" value="{{ old('title') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                        	<textarea class="form-control" rows="3" name="content"></textarea>
                            <span class="help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--select name="status" class="form-control">
                            @foreach ($tickets as $key => $slug)
                                <option value="{{ $key }}">{{ $slug }}</option>    
                            @endforeach
                        </select-->
                        <div class="col-md-10 col-md-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>      
                </fieldset>
            </form>
        </div>
    </div>
@endsection