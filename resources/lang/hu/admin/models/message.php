<?php

return [

    'does_not_exist' => 'Modell nem létezik.',
    'assoc_users'	 => 'Ez a modell jelenleg társított egy vagy több eszközhöz, és nem törölhető. Legyen szíves törölje az eszközt, és próbálja meg ismét a modell törlését. ',

    'create' => [
        'error'   => 'A model nem lett létrehozva. Próbálkozz újra.',
        'success' => 'A modell sikeresen létrehozva.',
        'duplicate_set' => 'Már létezik ilyen nevű eszközmodell, gyártó és modellszám.',
    ],

    'update' => [
        'error'   => 'A modell nem frissült, próbálkozzon újra',
        'success' => 'A modell sikeresen frissült.',
    ],

    'delete' => [
        'confirm'   => 'Biztos benne, hogy törli ezt az eszközmodellt?',
        'error'   => 'A modell törlését okozta. Kérlek próbáld újra.',
        'success' => 'A modell sikeresen törölve lett.',
    ],

    'restore' => [
        'error'   		=> 'A modell nem állt helyre, próbálkozzon újra',
        'success' 		=> 'A modell sikeresen visszaállt.',
    ],

    'bulkedit' => [
        'error'   		=> 'Nincsenek mezők megváltoztak, így semmi sem frissült.',
        'success' 		=> 'Modellek frissítve.',
    ],

    'bulkdelete' => [
        'error'   		    => 'Nem voltak eszközök kiválasztva, így semmi sem lett törölve.',
        'success' 		    => ':success_count eszköz(ök) törölve!',
        'success_partial' 	=> ': success_count modell(ek) törlésre kerültek, azonban ennyit nem sikerült törölni: a fail_count , mert még hozzárendelt eszközökkel rendelkeznek.',
    ],

];
