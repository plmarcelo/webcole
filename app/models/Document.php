<?php
use LaravelBook\Ardent\Ardent;

class Document extends Ardent
{
	public function documentType()
	{
		return $this->belongsTo('DocumentType');
	}

}