<?php 

    return[
        'registration' => [

            'header' => [
                'textHeader' => 'Регистрация',
            ],
            'registrationForm' =>   [
                
                'name' => [
                    
                    'label' => 'Имя',
                    'placeholder' => 'Введите имя'
                ],

                'email' => [
                    
                    'label' => 'Email',
                    'placeholder' => 'Введите email-адрес'
                ],
                'password' => [

                    'label' => 'Пароль',
                    'placeholder' => 'Минимальная длинна 8 символов'
                ],
                'confirmPassword' => [

                    'label' => 'Подтверждение пароля',
                    'placeholder' => 'Минимальная длинна 8 символов'
                ],
                'buttonSubmit' => [
                    'textOnBtn' => 'Зарегистрироваться'
                ],
                'referenceOnLogin' => [
                    'textRef' => 'Вы уже имеете аккаунт?'
                ]

            ]
        ]
    ]

?>