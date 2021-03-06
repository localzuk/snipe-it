<?php

return [

    'account_already_exists' => 'Учетная запись с таким адресом электронной почты уже существует.',
    'account_not_found'      => 'Неверный Логин или Пароль.',
    'account_not_activated'  => 'Эта учетная запись не активирована.',
    'account_suspended'      => 'Эта учетная запись приостановлена.',
    'account_banned'         => 'Эта учетная запись заблокирована.',
    'throttle'               => 'Слишком много неудачных попыток входа. Пожалуйста, попробуйте через :minutes минут.',

    'two_factor' => [
        'already_enrolled'      => 'Ваше устройство уже зарегистрировано.',
        'success'               => 'Вы успешно вошли.',
        'code_required'         => 'Требуется Двух-Факторный код подтверждения.',
        'invalid_code'          => 'Недействительный Двух-Факторный код подтверждения.',
    ],

    'signin' => [
        'error'   => 'При попытке входа возникла проблема, пожалуйста попробуйте позже.',
        'success' => 'Вы успешно авторизованы.',
    ],

    'logout' => [
        'error'   => 'При попытке входа возникла проблема, пожалуйста попробуйте позже.',
        'success' => 'Вы успешно вышли из системы.',
    ],

    'signup' => [
        'error'   => 'При попытке создания вашей учетной записи возникла проблема, пожалуйста попробуйте позже.',
        'success' => 'Учетная запись успешно создана.',
    ],

    'forgot-password' => [
        'error'   => 'При попытке сброса возникла проблема, пожалуйста попробуйте позже.',
        'success' => 'Если данный адрес электронной почты существует в нашей системе - будет отправлено письмо с возможностью восстановление пароля.',
    ],

    'forgot-password-confirm' => [
        'error'   => 'При попытке сбросить ваш пароль возникла проблема, пожалуйста попробуйте позже.',
        'success' => 'Ваш пароль успешно изменен.',
    ],

];
