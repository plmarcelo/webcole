<?php

class DocumentTypeSeeder extends Seeder {

    public function run()
    {
        //DB::table('document_types')->delete();

        DocumentType::create(array(
            'name'  => 'Tipo de documento 1'
        ));

        DocumentType::create(array(
            'name'  => 'Tipo de documento 2'
        ));
    }
}