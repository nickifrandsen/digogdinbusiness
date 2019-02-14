<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class WorkshopAttendee extends Model
{

	use Notifiable;

	protected $casts = [
        'questions' => 'array',
    ];

    protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'questions',
		'workshop_id',
		'has_business',
		'has_payed'
	];

	public function workshop()
    {
        return $this->belongsTo('App\Workshop');
    }
}