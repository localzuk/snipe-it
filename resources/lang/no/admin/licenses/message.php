<?php

return [

    'does_not_exist' => 'Lisens eksisterer ikke.',
    'user_does_not_exist' => 'Bruker eksisterer ikke.',
    'asset_does_not_exist' 	=> 'Eiendelen du prøver å koble til denne lisensen eksisterer ikke.',
    'owner_doesnt_match_asset' => 'Eiendelen du prøver å koble til denne lisensen er eid av noen andre enn personen du har valgt i tildelt til-nedtrekkslista.',
    'assoc_users'	 => 'Denne lisensen er sjekket ut til en bruker og kan ikke slettes. Vennligst sjekk inn lisensen først, og forsøk sletting på nytt. ',
    'select_asset_or_person' => 'Du må velge en ressurs eller en bruker, men ikke begge.',
    'not_found' => 'License not found',

    'create' => [
        'error'   => 'Lisens ble ikke opprettet, prøv igjen.',
        'success' => 'Vellykket opprettelse av lisens.',
    ],

    'deletefile' => [
        'error'   => 'Fil ble ikke slettet. Prøv igjen.',
        'success' => 'Fil ble slettet.',
    ],

    'upload' => [
        'error'   => 'Fil(er) ble ikke lastet opp. Prøv igjen.',
        'success' => 'Fil(er) ble slettet.',
        'nofiles' => 'Ingen fil er valgt til opplasting, eller filen er for stor',
        'invalidfiles' => 'En eller flere av filene er for stor, eller er en filtype som ikke er tillatt. Tillatte filtyper er png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml, og lic.',
    ],

    'update' => [
        'error'   => 'Lisens ble ikke oppdatert, prøv igjen',
        'success' => 'Vellykket oppdatering av lisens.',
    ],

    'delete' => [
        'confirm'   => 'Er du sikker på at du vil slette denne lisensen?',
        'error'   => 'Det oppstod et problem under sletting av lisens. Vennligst prøv igjen.',
        'success' => 'Vellykket sletting av lisens.',
    ],

    'checkout' => [
        'error'   => 'Det oppstod et problem under utsjekk av lisens. Vennligst prøv igjen.',
        'success' => 'Vellykket utsjekk av lisens',
    ],

    'checkin' => [
        'error'   => 'Det oppstod et problem under innsjekk av lisens. Vennligst prøv igjen.',
        'success' => 'Vellykket innsjekk av lisens',
    ],

];
