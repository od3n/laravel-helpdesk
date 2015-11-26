<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ticket;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TicketFormRequest;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tickets = Ticket::all();
        $tickets = Ticket::where('user_id', Auth::user()->id)->get();

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketFormRequest $request)
    {
        $ticket = new Ticket();
        $ticket->title = request('title');
        $ticket->content = request('content');
        $ticket->slug = uniqid();
        $ticket->user_id = Auth::user()->id;
        $ticket->status = 5;
        $ticket->save();

        return redirect('tickets')
        ->withStatus('Your ticket has been created! Its unique id is ' . $ticket->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();

        if (Auth::user()->id !=  $ticket->user_id) {
            return redirect('tickets')
            ->withErrors('You don\'t have permission to view this ticket ' . $ticket->slug);
        }

        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();

        if (Auth::user()->id !=  $ticket->user_id) {
            return redirect('tickets')
            ->withErrors('You don\'t have permission to edit this ticket ' . $ticket->slug);
        }

        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TicketFormRequest $request, $slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = request('title');
        $ticket->content = request('content');
        $ticket->status = request('status');
        $ticket->save();

        return redirect('tickets')
        ->withStatus('Your ticket has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();

        return redirect('tickets')
        ->withStatus('This ticket ' . $slug . ' has been deleted!');
    }
}
