<?php
use LaravelBook\Ardent\Ardent;

class Teacher extends Ardent
{
	public function Task()
	{
		return $this->belongsTo('Task');
	}

	public function Speciality()
	{
		return $this->belongsTo('Speciality');
	}
}