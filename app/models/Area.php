<?php
use LaravelBook\Ardent\Ardent;

class Area extends Ardent
{
	public function events()
	{
		return $this->belongsToMany('Event', 'event_area');
	}

}