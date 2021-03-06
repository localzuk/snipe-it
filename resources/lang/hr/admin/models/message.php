<?php

return [

    'does_not_exist' => 'Model ne postoji.',
    'assoc_users'	 => 'Ovaj je model trenutno povezan s jednom ili više imovine i ne može se izbrisati. Izbrišite imovinu pa pokušajte ponovo ukloniti.',

    'create' => [
        'error'   => 'Model nije izrađen, pokušajte ponovo.',
        'success' => 'Model je uspješno izrađen.',
        'duplicate_set' => 'Model imovine s tim nazivom, proizvođačem i brojem modela već postoji.',
    ],

    'update' => [
        'error'   => 'Model nije ažuriran, pokušajte ponovo',
        'success' => 'Model je uspješno ažuriran.',
    ],

    'delete' => [
        'confirm'   => 'Jeste li sigurni da želite izbrisati ovaj model sredstva?',
        'error'   => 'Došlo je do problema s brisanjem modela. Molim te pokušaj ponovno.',
        'success' => 'Model je uspješno izbrisan.',
    ],

    'restore' => [
        'error'   		=> 'Model nije obnovljen, pokušajte ponovo',
        'success' 		=> 'Model je uspješno obnovljen.',
    ],

    'bulkedit' => [
        'error'   		=> 'Nijedna polja nisu promijenjena, tako da ništa nije ažurirano.',
        'success' 		=> 'Modeli su ažurirani.',
    ],

    'bulkdelete' => [
        'error'   		    => 'Nijedan model nije odabran, tako da ništa nije izbrisano.',
        'success' 		    => ':success_count model(a) izbrisan(o)!',
        'success_partial' 	=> ':success_count model(a) je izbrisano, no :fail_count nije bilo moguće izbrisati jer još uvijek imaju imovinu povezanu s njima.',
    ],

];
