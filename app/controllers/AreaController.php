<?php

class AreaController extends BaseController {


	public function getIndex()
	{
		$areas = DocumentType::all();

		return View::make('admin.areas')->with('areas', $areas);
	}

}