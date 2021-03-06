<?php

return [

    'does_not_exist' => 'Das Zubehör [:id] existiert nicht.',
    'assoc_users'	 => 'Dieses Zubehör ist derzeit an :count Benutzern zur Verwendung ausgegeben worden. Bitte buchen Sie das Zubehör wieder ein und versuchen es dann erneut. ',

    'create' => [
        'error'   => 'Zubehör wurde nicht erstellt, bitte versuchen Sie es erneut.',
        'success' => 'Zubehör erfolgreich angelegt.',
    ],

    'update' => [
        'error'   => 'Zubehör wurde nicht aktualisiert, bitte versuchen Sie es erneut',
        'success' => 'Zubehör wurde erfolgreich aktualisiert.',
    ],

    'delete' => [
        'confirm'   => 'Sind Sie sicher, dass Sie dieses Zubehör löschen möchten?',
        'error'   => 'Beim Löschen dieses Zubehörs ist ein Problem aufgetreten. Bitte versuchen Sie es erneut.',
        'success' => 'Das Zubehör wurde erfolgreich gelöscht.',
    ],

     'checkout' => [
        'error'   		=> 'Zubehör konnte nicht herausgegeben werden. Bitte versuchen Sie es erneut',
        'success' 		=> 'Zubehör erfolgreich herausgegeben.',
        'user_does_not_exist' => 'Dieser Benutzer existiert nicht. Bitte versuchen Sie es erneut.',
    ],

    'checkin' => [
        'error'   		=> 'Das Zubehör wurde nicht erfolgreich zurückgenommen. Bitte versuchen Sie es erneut',
        'success' 		=> 'Zubehör erfolgreich zurückgenommen.',
        'user_does_not_exist' => 'Dieser Benutzer existiert nicht. Bitte versuchen Sie es erneut.',
    ],

];
