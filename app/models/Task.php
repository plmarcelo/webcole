<?php
use LaravelBook\Ardent\Ardent;

class Task extends Ardent
{
	public function teachers()
	{
		return $this->hasMany('Teacher');
	}

}