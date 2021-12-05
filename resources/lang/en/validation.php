<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

	'accepted'              => 'El campo :attribute debe ser aceptado.',
	'active_url'            => 'El campo :attribute no es una URL válida.',
	'after'                 => 'El campo :attribute debe ser una fecha después de :date.',
	'after_or_equal'        => 'El campo :attribute debe ser una fecha después o igual a :date.',
	'alpha'                 => 'El campo :attribute sólo puede contener letras.',
	'alpha_dash'            => 'El campo :attribute sólo puede contener letras, números y guiones.',
	'alpha_num'             => 'El campo :attribute sólo puede contener letras y números.',
	'array'                 => 'El campo :attribute debe ser un arreglo.',
	'before'                => 'El campo :attribute debe ser una fecha antes de :date.',
	'before_or_equal'       => 'El campo :attribute debe ser una fecha antes o igual a :date.',
	'between'               => [
		'numeric' => 'El campo :attribute debe estar entre :min - :max.',
		'file'    => 'El campo :attribute debe estar entre :min - :max kilobytes.',
		'string'  => 'El campo :attribute debe estar entre :min - :max caracteres.',
		'array'   => 'El campo :attribute debe tener entre :min y :max elementos.',
	],
	'boolean'               => 'El campo :attribute debe ser verdadero o falso.',
	'confirmed'             => 'El campo de confirmación de :attribute no coincide.',
	'date'                  => 'El campo :attribute no es una fecha válida.',
	'date_equals'			=> 'El campo :attribute debe ser una fecha igual a :date.',
	'date_format' 	        => 'El campo :attribute no corresponde con el formato :format.',
	'different'             => 'Los campos :attribute y :other deben ser diferentes.',
	'digits'                => 'El campo :attribute debe ser de :digits dígitos.',
	'digits_between'        => 'El campo :attribute debe tener entre :min y :max dígitos.',
	'dimensions'            => 'El campo :attribute no tiene una dimensión válida.',
	'distinct'              => 'El campo :attribute tiene un valor duplicado.',
	'email'                 => 'El formato del :attribute es inválido.',
	'ends_with'				=> 'El campo :attribute debe terminar con alguno de los valores: :values.',
	'exists'                => 'El campo :attribute seleccionado es inválido.',
	'file'                  => 'El campo :attribute debe ser un archivo.',
	'filled'                => 'El campo :attribute es requerido.',
	'gt'                    => [
		'numeric' => 'El campo :attribute debe ser mayor que :value.',
		'file'    => 'El campo :attribute debe ser mayor que :value kilobytes.',
		'string'  => 'El campo :attribute debe ser mayor que :value caracteres.',
		'array'   => 'El campo :attribute puede tener hasta :value elementos.',
	],
	'gte'                   => [
		'numeric' => 'El campo :attribute debe ser mayor o igual que :value.',
		'file'    => 'El campo :attribute debe ser mayor o igual que :value kilobytes.',
		'string'  => 'El campo :attribute debe ser mayor o igual que :value caracteres.',
		'array'   => 'El campo :attribute puede tener :value elementos o más.',
	],
	'image'                 => 'El campo :attribute debe ser una imagen.',
	'in'                    => 'El campo :attribute seleccionado es inválido.',
	'in_array'              => 'El campo :attribute no existe en :other.',
	'integer'               => 'El campo :attribute debe ser un entero.',
	'ip'                    => 'El campo :attribute debe ser una dirección IP válida.',
	'ipv4'                  => 'El campo :attribute debe ser una dirección IPv4 válida.',
	'ipv6'                  => 'El campo :attribute debe ser una dirección IPv6 válida.',
	'json'                  => 'El campo :attribute debe ser una cadena JSON válida.',
	'lt'                   => [
		'numeric' => 'El campo :attribute debe ser menor que :max.',
		'file'    => 'El campo :attribute debe ser menor que :max kilobytes.',
		'string'  => 'El campo :attribute debe ser menor que :max caracteres.',
		'array'   => 'El campo :attribute puede tener hasta :max elementos.',
	],
	'lte'                   => [
		'numeric' => 'El campo :attribute debe ser menor o igual que :max.',
		'file'    => 'El campo :attribute debe ser menor o igual que :max kilobytes.',
		'string'  => 'El campo :attribute debe ser menor o igual que :max caracteres.',
		'array'   => 'El campo :attribute no puede tener más que :max elementos.',
	],
	'max'                   => [
		'numeric' => 'El campo :attribute debe ser menor que :max.',
		'file'    => 'El campo :attribute debe ser menor que :max kilobytes.',
		'string'  => 'El campo :attribute debe ser menor que :max caracteres.',
		'array'   => 'El campo :attribute puede tener hasta :max elementos.',
	],
	'mimes'                 => 'El campo :attribute debe ser un archivo de tipo: :values.',
	'mimetypes'             => 'El campo :attribute debe ser un archivo de tipo: :values.',
	'min'                   => [
		'numeric' => 'El campo :attribute debe tener al menos :min.',
		'file'    => 'El campo :attribute debe tener al menos :min kilobytes.',
		'string'  => 'El campo :attribute debe tener al menos :min caracteres.',
		'array'   => 'El campo :attribute debe tener al menos :min elementos.',
	],
	'multiple_of' 			=> 'El campo :attribute debe ser un múltiplo de :value.',
	'not_in'                => 'El campo :attribute seleccionado es invalido.',
	'not_regex'             => 'El formato del campo :attribute es inválido.',
	'numeric'               => 'El campo :attribute debe ser un número.',
	'password'				=> 'La contraseña es incorrecta.',
	'present'               => 'El campo :attribute debe estar presente.',
	'regex'                 => 'El formato del campo :attribute es inválido.',
	'required'              => 'El campo :attribute es requerido.',
	'required_if'           => 'El campo :attribute es requerido cuando el campo :other es :value.',
	'required_unless'       => 'El campo :attribute es requerido a menos que :other esté presente en :values.',
	'required_with'         => 'El campo :attribute es requerido cuando :values está presente.',
	'required_with_all'     => 'El campo :attribute es requerido cuando :values está presente.',
	'required_without'      => 'El campo :attribute es requerido cuando :values no está presente.',
	'required_without_all'  => 'El campo :attribute es requerido cuando ningún :values está presente.',
    'prohibited' 			=> 'El campo :attribute está prohibido.',
    'prohibited_if'			=> 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless'		=> 'El campo :attribute está prohibido si :other no está en :values.',
	'same'                  => 'El campo :attribute y :other debe coincidir.',
	'size'                  => [
		'numeric' => 'El campo :attribute debe ser :size.',
		'file'    => 'El campo :attribute debe tener :size kilobytes.',
		'string'  => 'El campo :attribute debe tener :size caracteres.',
		'array'   => 'El campo :attribute debe contener :size elementos.',
	],
	'starts_with'           => 'El :attribute debe empezar con uno de los siguientes valores :values',
	'string'                => 'El campo :attribute debe ser una cadena.',
	'timezone'              => 'El campo :attribute debe ser una zona válida.',
	'unique'                => 'El campo :attribute ya ha sido tomado.',
	'uploaded'              => 'El campo :attribute no ha podido ser cargado.',	
	'url'                   => 'El formato de :attribute es inválido.',
	'uuid'                  => 'El :attribute debe ser un UUID valido.',
    
    /*'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',*/

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
