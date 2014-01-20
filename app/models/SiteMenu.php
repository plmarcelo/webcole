<?php
use LaravelBook\Ardent\Ardent;

class SiteMenu extends Ardent
{
	public function siteMenuOptions()
	{
		return $this->hasMany('SiteMenuOption');
	}
}