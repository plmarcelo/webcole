<?php
use LaravelBook\Ardent\Ardent;

class Page extends Ardent
{
	public function pageTexts()
	{
		return $this->hasMany('PageText');
	}
}