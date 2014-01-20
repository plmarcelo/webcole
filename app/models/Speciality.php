<?php
use LaravelBook\Ardent\Ardent;

class Speciality extends Ardent
{
	public function teachers()
	{
		return $this->hasMany('Teacher');
	}

}