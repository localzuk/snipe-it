<?php

return [

    'account_already_exists' => 'Un compte avec cet e-mail existe déjà.',
    'account_not_found'      => 'Nom d\'usager ou mot de passe incorrect.',
    'account_not_activated'  => 'Ce compte n\'est pas activé.',
    'account_suspended'      => 'Ce compte est suspendu.',
    'account_banned'         => 'Ce compte est banni.',
    'throttle'               => 'Trop de tentatives de connexion échouées. Veuillez réessayer dans :minutes minutes.',

    'two_factor' => [
        'already_enrolled'      => 'Votre appareil est déjà inscrit.',
        'success'               => 'Vous êtes bien connecté.',
        'code_required'         => 'Le code à deux facteurs est requis.',
        'invalid_code'          => 'Le code à deux facteurs est invalide.',
    ],

    'signin' => [
        'error'   => 'Un problème a eu lieu pendant votre connexion, veuillez essayer à nouveau.',
        'success' => 'Vous avez été connecté avec succès.',
    ],

    'logout' => [
        'error'   => 'Il y a eu un problème en essayant de vous déconnecter, veuillez réessayer.',
        'success' => 'Vous êtes déconnecté avec succès.',
    ],

    'signup' => [
        'error'   => 'Un problème a eu lieu pendant la création de votre compte, veuillez essayer à nouveau.',
        'success' => 'Le compte a été créé avec succès.',
    ],

    'forgot-password' => [
        'error'   => 'Un problème a eu lieu pendant la récupération du code de réinitialisation de mot de passe, veuillez essayer à nouveau.',
        'success' => 'Si cette adresse email existe dans notre système, un e-mail de récupération de mot de passe a été envoyé.',
    ],

    'forgot-password-confirm' => [
        'error'   => 'Un problème a eu lieu pendant la réinitialisation de votre mot de passe, veuillez essayer à nouveau.',
        'success' => 'Votre mot de passe a été réinitialisé avec succès.',
    ],

];
