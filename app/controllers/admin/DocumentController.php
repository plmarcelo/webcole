<?php

class Admin_DocumentController extends AdminBaseController {


	public function getIndex()
	{
		$doc_types = DocumentType::all();

		return View::make('admin.documents')->with('doc_types', $doc_types);
	}

}