<?php

return [

    'account_already_exists' => 'Обліковий запис з цією електронною адресою вже існує.',
    'account_not_found'      => 'Неправильне ім\'я користувача або пароль.',
    'account_not_activated'  => 'Цей обліковий запис не активовано.',
    'account_suspended'      => 'Дію цього аккаунта призупинено.',
    'account_banned'         => 'Цей аккаунт заблоковано.',
    'throttle'               => 'Too many failed login attempts. Please try again in :minutes minutes.',

    'two_factor' => [
        'already_enrolled'      => 'Your device is already enrolled.',
        'success'               => 'You have successfully logged in.',
        'code_required'         => 'Two-factor code is required.',
        'invalid_code'          => 'Two-factor code is invalid.',
    ],

    'signin' => [
        'error'   => 'Під час спроби входу в систему сталася помилка. Будь ласка, спробуйте ще раз.',
        'success' => 'Ви успішно увійшли в систему.',
    ],

    'logout' => [
        'error'   => 'There was a problem while trying to log you out, please try again.',
        'success' => 'You have successfully logged out.',
    ],

    'signup' => [
        'error'   => 'Сталася помилка під час створення свого облікового запису, будь ласка, спробуйте ще раз.',
        'success' => 'Обліковий запис успішно створено.',
    ],

    'forgot-password' => [
        'error'   => 'There was a problem while trying to get a reset password code, please try again.',
        'success' => 'If that email address exists in our system, a password recovery email has been sent.',
    ],

    'forgot-password-confirm' => [
        'error'   => 'There was a problem while trying to reset your password, please try again.',
        'success' => 'Your password has been successfully reset.',
    ],

];
