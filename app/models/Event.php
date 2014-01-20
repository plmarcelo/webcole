<?php
use LaravelBook\Ardent\Ardent;

class Event extends Ardent
{
	public function areas()
	{
		return $this->belongsToMany('Area', 'event_area');
	}

	public function classrooms()
	{
		return $this->belongsToMany('Classroom', 'event_classroom');
	}

	public function eventType()
	{
		return $this->belongsTo('EventType');
	}

	public function Transport()
	{
		return $this->belongsTo('Transport');
	}

}