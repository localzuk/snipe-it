<?php

return [

    'does_not_exist' => 'Platsen finns inte.',
    'assoc_users'	 => 'Platsen är associerad med minst en användare och kan inte tas bort. Vänligen uppdatera dina användare så dom inte refererar till denna plats och försök igen.',
    'assoc_assets'	 => 'Platsen är associerad med minst en tillgång och kan inte tas bort. Vänligen uppdatera dina tillgångar så dom inte refererar till denna plats och försök igen. ',
    'assoc_child_loc'	 => 'Denna plats är för närvarande överliggande för minst en annan plats och kan inte tas bort. Vänligen uppdatera dina platser så dom inte längre refererar till denna och försök igen.',

    'create' => [
        'error'   => 'Platsen kunde inte skapas. Vänligen försök igen.',
        'success' => 'Platsen skapades.',
    ],

    'update' => [
        'error'   => 'Platsen kunde inte uppdateras. Vänligen försök igen',
        'success' => 'Platsen uppdaterades.',
    ],

    'delete' => [
        'confirm'   	=> 'Är du säker du vill ta bort denna plats?',
        'error'   => 'Ett fel inträffade när denna plats skulle tas bort. Vänligen försök igen.',
        'success' => 'Platsen har tagits bort.',
    ],

];
