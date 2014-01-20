<?php

class Admin_DocumentTypeController extends AdminBaseController {


	public function index()
	{
		$doc_types = DocumentType::all();

		return View::make('admin.document_types.index')->with('doc_types', $doc_types);
	}

	public function create()
	{
		$doc_type = new DocumentType();

		if ( $doc_type->save() )
		{
			return Redirect::to('/admin/doc_types')->with('message', 'Se ha añadido con exito!');
		}
		else
		{
			return Redirect::back()->withErrors( $doc_type->errors() );
		}
	}

}