<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\WorkshopAttendee;
use Stripe\{Stripe, Charge, Customer};


class PurchasesController extends Controller
{

	public function index($id)
	{
		$attendee = WorkshopAttendee::findOrFail($id);

		return view('workshops.payment', compact('attendee'));
	}

	public function store()
	{
		Stripe::setApiKey( config('services.stripe.secret') );

		$customer = Customer::create([
			'email' => request('stripeEmail'),
			'source'  => request('stripeToken'),
		]);

		Charge::create([
			'customer' => $customer->id,
			'amount' => 150000,
		    'currency' => 'dkk',
		    'description' => 'Dig & Din Business Online Workshop',
		    'metadata' => [],
		    'receipt_email' => $customer->email,
		]);



		return redirect('workshops/tilmeldt');
	}
}
