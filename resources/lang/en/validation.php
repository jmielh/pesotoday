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

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha después de :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha después o igual a :date.',
    'alpha' => 'El :attribute puede solo contener letras.',
    'alpha_dash' => 'El :attribute puede solo contener letras, números, guiones y guiones bajo.',
    'alpha_num' => 'El :attribute puede solo contener letras y números.',
    'array' => 'El :attribute debe ser un array.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max caracteres.',
        'array' => 'El :attribute debe estar entre :min y :max items.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso .',
    'confirmed' => 'El :attribute de confirmación no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincideo con el formato :format.',
    'different' => 'El :attribute y :oElr deben ser diferentes.',
    'digits' => 'El :attribute debe ser :digits digitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max digitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imágen inválida.',
    'distinct' => 'El :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser un email válido.',
    'ends_with' => 'El :attribute debe terminar con los siguientes following: :values.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor a :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor a :value caracteres.',
        'array' => 'El :attribute debe tener más de :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual :value.',
        'file' => 'El :attribute debe ser mayor que o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que :value caracteres.',
        'array' => 'El :attribute debe tener :value items o más.',
    ],
    'image' => 'El :attribute debe ser una imágen.',
    'in' => 'El :attribute seleccionado es inválido.',
    'in_array' => 'El campo :attribute no existe en :oElr.',
    'integer' => 'El :attribute debe ser un entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'string' => 'El :attribute debe ser menor que :value caracteres.',
        'array' => 'El :attribute debe tener menos que :value items.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual a :value.',
        'file' => 'El :attribute debe ser menor o igual a :value kilobytes.',
        'string' => 'El :attribute debe ser menor o igual a  :value caracteres.',
        'array' => 'El :attribute no debe tener más que :value items.',
    ],
    'max' => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file' => 'El :attribute no puede mayor que  :max kilobytes.',
        'string' => 'El :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El :attribute no puede tener más de  :max items.',
    ],
    'mimes' => 'El :attribute must be a file of type: :values.',
    'mimetypes' => 'El :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe ser al menos de :min kilobytes.',
        'string' => 'El :attribute debe ser al menos de  :min caracteres.',
        'array' => 'El :attribute debe tener al menos :min items.',
    ],
    'not_in' => 'El selected :attribute is invalid.',
    'not_regex' => 'El formato de :attribute es inválido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute es inválido.',
    'required' => 'El campo :attribute es requerido .',
    'required_if' => 'El campo :attribute es requerido cuando :oElr es :value.',
    'required_unless' => 'El campo :attribute es requerido al menos que  :oElr está en :values.',
    'required_with' => 'El :attribute es requerido cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es requerido cuando :values están presente.',
    'required_without' => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute no se require cuando ninguno de los valores :values están presente.',
    'same' => 'El :attribute and :oElr must match.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe ser :size characteres.',
        'array' => 'El :attribute debe contener :size items.',
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes valores: :values.',
    'string' => 'El :attribute debe ser un texto.',
    'timezone' => 'El :attribute debe ser una zona inválida.',
    'unique' => 'El :attribute ya ha sido utilizado.',
    'uploaded' => 'El :attribute falló al subir.',
    'url' => 'El :attribute es un formato inválido.',
    'uuid' => 'El :attribute debe ser un válido UUID.',

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
