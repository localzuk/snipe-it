<?php

return [

    'does_not_exist' => 'Model bestaat niet.',
    'assoc_users'	 => 'Dit model is momenteel gekoppeld met één of meer assets en kan niet worden verwijderd. Verwijder de assets en probeer het opnieuw. ',

    'create' => [
        'error'   => 'Model is niet aangemaakt, probeer het opnieuw.',
        'success' => 'Model is met succes aangemaakt.',
        'duplicate_set' => 'Een asset model met die naam, fabrikant en model nummer bestaat al.',
    ],

    'update' => [
        'error'   => 'Model is niet gewijzigd, probeer het opnieuw',
        'success' => 'Model met succes gewijzigd.',
    ],

    'delete' => [
        'confirm'   => 'Weet je het zeker dat je deze asset model wilt verwijderen?',
        'error'   => 'Er was een probleem tijden het verwijderen van dit model. Probeer het opnieuw.',
        'success' => 'Het model is met succes verwijderd.',
    ],

    'restore' => [
        'error'   		=> 'Model is niet hersteld. Probeer opnieuw',
        'success' 		=> 'Model is met succes hersteld.',
    ],

    'bulkedit' => [
        'error'   		=> 'Er was geen veld geselecteerd dus is er niks gewijzigd.',
        'success' 		=> 'Modellen bijgewerkt.',
    ],

    'bulkdelete' => [
        'error'   		    => 'Er waren geen modellen geselecteerd, er is dus niets verwijderd.',
        'success' 		    => ':success_count model(s) verwijderd!',
        'success_partial' 	=> ':success_count model(len) werden verwijderd, maar : fail_count konden niet worden verwijderd omdat er nog steeds assets aan gekoppeld zijn.',
    ],

];
