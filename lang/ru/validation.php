<?php 

    return [
        'attributes' => [
            'name' => 'имя',
            'password' => 'пароль',
            'email' => 'email-адрес'
        ],
        'required' => 'Поле :attribute обязательное для заполнения.',
        'email' => 'Поле должно содержать email-адрес.',
        'unique' => ':attribute уже существует.',
        'min' => [
            'array' => 'The :attribute field must have at least :min items.',
            'file' => 'The :attribute field must be at least :min kilobytes.',
            'numeric' => 'The :attribute field must be at least :min.',
            'string' => 'Минимальная длина поля :attribute :min символов.',
        ],
        'confirmed' => 'Неправильное подтверждение поля :attribute.',
    ]

?>