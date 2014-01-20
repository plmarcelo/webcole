<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted" => "El elemento - :attribute - debe ser aceptado.",
	"active_url" => "El elemento - :attribute - debe ser una URL válida.",
	"after" => "El elemento - :attribute - debe ser una fecha después de :date.",
	"alpha" => "El elemento - :attribute - solo debe contener letras.",
	"alpha_dash" => "El elemento - :attribute - solo debe contener letras, números y guiónes.",
	"alpha_num" => "El elemento - :attribute - solo debe contener letras y números.",
	"array" => "El elemento - :attribute - debe tener un elemento seleccionado.",
	"before" => "El elemento - :attribute - debe ser una fecha anterior a :date.",
	"between" => array(
		"numeric" => "El elemento - :attribute - debe ser entre :min y :max.",
		"file" => "El elemento - :attribute - debe ser entre :min y :max kilobytes.",
		"string" => "El elemento - :attribute - debe contener entre :min y :max caracteres.",
	),
	"confirmed" => "El elemento - :attribute - no es igual.",
	"count" => "El elemento - :attribute - debe contener exactamente :count elementos seleccionados.",
	"countbetween" => "El elemento - :attribute - debe contener entre :min y :max elementos seleccionados.",
	"countmax" => "El elemento - :attribute - debe contener menos de :max elementos seleccionados.",
	"countmin" => "El elemento - :attribute - debe contener al menos :min elementos seleccionados.",
	"different" => "El elemento - :attribute - y :other deben ser distintos.",
	"email" => "El elemento - :attribute - tiene un formato inválido.",
	"exists" => "El elemento seleccionado - :attribute - es inválido.",
	"image" => "El elemento - :attribute - debe ser de tipo imágen.",
	"in" => "El elemento - :attribute - es inválido.",
	"integer" => "El elemento - :attribute - debe ser entero.",
	"ip" => "El elemento - :attribute - debe ser una dirección IP válida.",
	"match" => "El elemento - :attribute - contiene un formato inválido.",
	"max" => array(
		"numeric" => "El elemento - :attribute - debe ser menor a :max.",
		"file" => "El elemento - :attribute - debe ser menor a :max kilobytes.",
		"string" => "El elemento - :attribute - debe ser menor a :max caracteres.",
	),
	"mimes" => "El elemento - :attribute - debe ser archivo tipo: :values.",
	"min" => array(
		"numeric" => "El elemento - :attribute - debe ser mínimo :min.",
		"file" => "El elemento - :attribute - debe ser mínimo de :min kilobytes.",
		"string" => "El elemento - :attribute - debe contener mínimo :min caracteres.",
	),
	"not_in" => "El elemento - :attribute - es invalido.",
	"numeric" => "El elemento - :attribute - debe ser numérico.",
	"required" => "El elemento - :attribute - es requerido.",
	"same" => "El elemento - :attribute - y :other debe ser iguales.",
	"size" => array(
		"numeric" => "El elemento - :attribute - debe ser :size.",
		"file" => "El elemento - :attribute - debe ser :size kilobyte.",
		"string" => "El elemento - :attribute - debe ser de :size caracteres.",
	),
	"unique" => "El elemento - :attribute - se encuentra ocupado.",
	"url" => "El elemento - :attribute - el formato es inválido.",


	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
		'username' => 'nombre de usuario'
	),

);
