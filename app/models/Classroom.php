<?php
use LaravelBook\Ardent\Ardent;

class Classroom extends Ardent
{
	public function events()
	{
		return $this->belongsToMany('Event', 'event_area');
	}

	public function classroomLevel()
	{
		return $this->belongsTo('ClassroomLevel');
	}

}