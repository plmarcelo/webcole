<?php
use LaravelBook\Ardent\Ardent;

class SiteMenuOpion extends Ardent
{
	public function siteMenu()
	{
		return $this->belongsTo('SiteMenu');
	}

}