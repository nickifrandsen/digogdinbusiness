<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\BookingRequest;
use Illuminate\Support\Facades\Validator;
use App\Notifications\AttendingWorkshopConfirmation;

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

        	return redirect('workshops/tilmeldt');
        }

        return back();
    } 

    public function confirmed()
    {
    	return view('workshops.attending');
    }
}
