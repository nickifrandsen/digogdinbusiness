<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Workshop extends Model
{	
	protected $fillable = [
		'title',
		'description',
		'unit_price',
		'sku'
	];

	public function attendees()
    {
        return $this->hasMany('App\WorkshopAttendee');
    }
}
