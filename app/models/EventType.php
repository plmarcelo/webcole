<?php
use LaravelBook\Ardent\Ardent;

class EventType extends Ardent
{
	public function events()
	{
		return $this->hasMany('Event');
	}
}