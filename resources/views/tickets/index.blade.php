@extends('master')        
@section('title', 'View Tickets')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        	<div class="panel-heading">
        		<h2>Tickets ({{ $tickets->count() }})</h2>
        	</div>

            @include('shared.notification')
            
        	@if ($tickets->isEmpty())
        		<p class="alert alert-info">There is no ticket.</p>
        	@else
        		<table class="table">
        			<thead>
        				<tr>
	        				<th>Id</th>
	        				<th>Title</th>
	        				<th>Status</th>
	        				<th>Created at</th>
        				</tr>
        			</thead>
        			<tbody>
        				@foreach ($tickets as $ticket)
	        				<tr>
		        				<td>{{ $ticket->id }}</td>
		        				<td>
		        					<a href="{{ action('TicketsController@show', $ticket->slug) }}">{{ $ticket->title }}</a>
	        					</td>
		        				<td>{{ set_status($ticket->status) }}</td>
		        				<td>{{ $ticket->created_at }}</td>
	        				</tr>
	        			@endforeach
        			</tbody>
        		</table>
        	@endif
        </div>
    </div>
@endsection