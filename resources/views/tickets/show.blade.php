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

            @if ($ticket->status != 3)
                <a href="{{ action('TicketsController@edit', $ticket->slug) }}" class="btn btn-info pull-left">Edit</a>
                
                <form method="POST" action="{{ action('TicketsController@destroy', $ticket->slug) }}" class="pull-left">
                    {!! csrf_field() !!}
                    
                    <div class="from-group">
                        <div>
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </div>
                    </div>
                </form>
            @endif
            <div class="clearfix"></div>
        </div>

        @foreach ($ticket->comments as $comment)
            <div class="well well bs-component">
                <div class="content">
                    {{ $comment->user->name }}
                    <br />{{ $comment->content }}
                    <span id="helpBlock" class="help-block">{{ $comment->created_at }}</span>
                </div>
            </div>
        @endforeach
    </div>

    @if ($ticket->status != 3)
        <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <form class="form-horizontal" method="POST" action="{{ url('/comments') }}">
                    
                    @include('shared.notification')

                    <fieldset>
                        {!! csrf_field() !!}
                        <input type="hidden" name="ticket_id" value="{{ $ticket->id}}" />

                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Reply</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" name="content"></textarea>
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
    @endif
@endsection