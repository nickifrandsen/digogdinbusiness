<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\WorkshopAttendee;

class NewAttendee extends Mailable
{
	use Queueable, SerializesModels;

	public $attendee;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(WorkshopAttendee $attendee)
    {
        $this->attendee = $attendee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	return $this->markdown('emails.workshop.new_attendee');
    }
}
