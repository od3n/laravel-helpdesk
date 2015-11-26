@extends('master')        
@section('title', 'Edit a Ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
        <form class="form-horizontal" method="POST" action="{{ action('TicketsController@edit', $ticket->slug) }}">
                
                @include('shared.notification')

                <fieldset>
                    <legend>Edit a Ticket</legend>
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="title" name="title" value="{{ $ticket->title }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                        	<textarea class="form-control" rows="3" name="content">{{ $ticket->content }}</textarea>
                            <span class="help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
                            <select name="status" class="form-control">
                                @foreach (get_statuses() as $key => $status)
                                    <option value="{{ $key }}" @if ($ticket->status == $key) selected @endif>{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
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