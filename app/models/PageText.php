<?php
use LaravelBook\Ardent\Ardent;

class PageText extends Ardent
{
	public function page()
	{
		return $this->belongsTo('Page');
	}

}