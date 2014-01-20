<?php
use LaravelBook\Ardent\Ardent;

class Photo extends Ardent
{
	public function gallery()
	{
		return $this->belongsTo('Gallery');
	}

}