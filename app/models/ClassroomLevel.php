<?php
use LaravelBook\Ardent\Ardent;

class ClassroomLevel extends Ardent
{
	public function classrooms()
	{
		return $this->hasMany('Classroom');
	}
}