<?php

return [

    'does_not_exist' => 'Model nie istnieje.',
    'assoc_users'	 => 'Ten model jest przypisany do minim jednego aktywa i nie może być usunięty. Proszę usunąć aktywa, a następnie spróbować ponownie. ',

    'create' => [
        'error'   => 'Model nie został stworzony. Spróbuj ponownie.',
        'success' => 'Model utworzony pomyślnie.',
        'duplicate_set' => 'Istnieje już model aktywu o tej nazwie, producencie i numerze.',
    ],

    'update' => [
        'error'   => 'Model nie został zaktualizowany, spróbuj ponownie',
        'success' => 'Model zaktualizowany pomyślnie.',
    ],

    'delete' => [
        'confirm'   => 'Czy na pewno chcesz usunąć ten model aktywów?',
        'error'   => 'Wystąpił błąd podczas usuwania modelu. Spróbuj ponownie.',
        'success' => 'Model usunięty poprawnie.',
    ],

    'restore' => [
        'error'   		=> 'Model nie został przywrócony, spróbuj ponownie',
        'success' 		=> 'Model został przywrócony pomyślnie.',
    ],

    'bulkedit' => [
        'error'   		=> 'Żadne pole nie zostało zmodyfikowane, więc nic nie zostało zaktualizowane.',
        'success' 		=> 'Modele zostały uaktualnione.',
    ],

    'bulkdelete' => [
        'error'   		    => 'Nie wybrano modeli, więc nic nie zostało usunięte.',
        'success' 		    => 'Zostało usunięte :success_count model(i)!',
        'success_partial' 	=> ':success_count model(i) zostało usuniętych, jednakże :fail_count nie udało się usunąć, ponieważ wciąż są powiązane z nimi zasoby.',
    ],

];
