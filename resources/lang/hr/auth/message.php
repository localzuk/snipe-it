<?php

return [

    'account_already_exists' => 'Račun s ovom e-porukom već postoji.',
    'account_not_found'      => 'Korisničko ime ili zaporka nisu točni.',
    'account_not_activated'  => 'Ovaj korisnički račun nije aktiviran.',
    'account_suspended'      => 'Ovaj je korisnički račun obustavljen.',
    'account_banned'         => 'Ovaj je korisnički račun zabranjen.',
    'throttle'               => 'Too many failed login attempts. Please try again in :minutes minutes.',

    'two_factor' => [
        'already_enrolled'      => 'Your device is already enrolled.',
        'success'               => 'You have successfully logged in.',
        'code_required'         => 'Two-factor code is required.',
        'invalid_code'          => 'Two-factor code is invalid.',
    ],

    'signin' => [
        'error'   => 'Došlo je do problema prilikom pokušaja prijavljivanja, pokušajte ponovo.',
        'success' => 'Uspješno ste se prijavili.',
    ],

    'logout' => [
        'error'   => 'There was a problem while trying to log you out, please try again.',
        'success' => 'You have successfully logged out.',
    ],

    'signup' => [
        'error'   => 'Došlo je do problema prilikom pokušaja izrade računa, pokušajte ponovo.',
        'success' => 'Račun je uspješno izrađen.',
    ],

    'forgot-password' => [
        'error'   => 'Pojavio se problem prilikom pokušaja ponovnog unosa zaporke, pokušajte ponovo.',
        'success' => 'If that email address exists in our system, a password recovery email has been sent.',
    ],

    'forgot-password-confirm' => [
        'error'   => 'Pokušavao je poništiti zaporku, pokušajte ponovo.',
        'success' => 'Vaša je lozinka uspješno vraćena.',
    ],

];
