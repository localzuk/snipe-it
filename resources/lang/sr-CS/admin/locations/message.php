<?php

return [

    'does_not_exist' => 'Lokacija ne postoji.',
    'assoc_users'	 => 'Ta je lokacija trenutno povezana s barem jednim korisnikom i ne može se izbrisati. Ažurirajte korisnike da više se ne referenciraju na ovu lokaciju i pokušajte ponovno. ',
    'assoc_assets'	 => 'Ta je lokacija trenutno povezana s barem jednim resursom i ne može se izbrisati. Ažurirajte resurs da se više ne referencira na tu lokaciju i pokušajte ponovno. ',
    'assoc_child_loc'	 => 'Ta je lokacija trenutno roditelj najmanje jednoj podredjenoj lokaciji i ne može se izbrisati. Ažurirajte svoje lokacije da se više ne referenciraju na ovu lokaciju i pokušajte ponovo. ',

    'create' => [
        'error'   => 'Lokacija nije kreirana, pokušajte ponovo.',
        'success' => 'Lokacija je uspešno kreirana.',
    ],

    'update' => [
        'error'   => 'Lokacija nije ažurirana, pokušajte ponovo',
        'success' => 'Lokacija je uspešno ažurirana.',
    ],

    'delete' => [
        'confirm'   	=> 'Jeste li sigurni da želite izbrisati tu lokaciju?',
        'error'   => 'Došlo je do problema s brisanjem lokacije. Molim pokušajte ponovo.',
        'success' => 'Lokacija je uspešno obrisana.',
    ],

];
