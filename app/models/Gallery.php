<?php
use LaravelBook\Ardent\Ardent;

class Gallery extends Ardent
{
	public function photos()
	{
		return $this->hasMany('Photo');
	}
}