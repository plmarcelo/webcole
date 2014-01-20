<?php
use LaravelBook\Ardent\Ardent;

class Transport extends Ardent
{
	public function events()
	{
		return $this->hasMany('Event');
	}
}