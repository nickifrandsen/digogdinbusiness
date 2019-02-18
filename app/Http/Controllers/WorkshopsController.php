<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\BookingRequest;
use Illuminate\Support\Facades\Validator;
use App\Notifications\AttendingWorkshopConfirmation;
use App\Mail\NewAttendee;
use Illuminate\Support\Facades\Mail;

class WorkshopsController extends Controller
{
	public function index()
	{

		return view('workshops.index');
	}    

	public function store(Request $request)
    {

		$messages = [
		    'required'    => 'Dette felt er påkrævet.',
		];

		$validator = Validator::make($request->all(), [
		   'first_name' => 'required|max:255',
		   'last_name' => 'required|max:255',
		   'email' => 'required|email',
		], $messages);

		 if ($validator->fails()) {

		 	flash('Ups, der skete en fejl i forsøget på ar behandle din forespørgsel.')->error();

            return back()
                    ->withErrors($validator, 'workshop')
                    ->withInput();
        }

        if( $attendee = \App\WorkshopAttendee::create($request->all()) ) {
        	// flash('Tak for din henvendelse. Jeg kontakter dig indenfor 48 timer.')->success();

        	$attendee->notify(new AttendingWorkshopConfirmation($attendee));
        	Mail::to('nf@nickifrandsen.dk')->queue(new NewAttendee($attendee));

        	return redirect('workshops/betaling/' . $attendee->id);
        }

        return back();
    } 

    public function confirmed()
    {
    	return view('workshops.attending');
    }
}
