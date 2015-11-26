@extends('master')        
@section('title', 'View a Ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h2 class="header">{{ $ticket->title }}</h2>
                <p><strong>Status</strong>: {{ set_status($ticket->status) }}</p>
                <p>{{ $ticket->content }}</p>
            </div>
            <a href="{{ action('TicketsController@edit', $ticket->slug) }}" class="btn btn-info pull-left">Edit</a>
            
            <form method="POST" action="{{ action('TicketsController@destroy', $ticket->slug) }}" class="pull-left">
                {!! csrf_field() !!}
                
                <div class="from-group">
                    <div>
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection