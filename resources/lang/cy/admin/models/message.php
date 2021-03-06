<?php

return [

    'does_not_exist' => 'Nid yw\'r model yn bodoli.',
    'assoc_users'	 => 'Mae\'r model yma wedi perthnasu hefo un neu mwy o asedau. Fydd rhaid dileu\'r asedau ac yna trio eto. ',

    'create' => [
        'error'   => 'Ni crewyd y model, ceisiwch eto o.g.y.dd.',
        'success' => 'Model wedi creu yn llwyddiannus.',
        'duplicate_set' => 'Mae model ased hefo\'r enw, gwneuthyrwr a rhif model yn bodoli yn barod.',
    ],

    'update' => [
        'error'   => 'Ni diweddarwyd y model, ceisiwch eto o.g.y.dd',
        'success' => 'Model wedi diweddaru\'n llwyddiannus.',
    ],

    'delete' => [
        'confirm'   => 'Ydych chi\'n sicr eich bod eisiau dileu\'r model ased yma?',
        'error'   => 'Nid oedd yn bosib dileu\'r model. Ceisiwch eto o.g.y.dd.',
        'success' => 'Model wedi dileu\'n llwyddiannus.',
    ],

    'restore' => [
        'error'   		=> 'Nid oedd yn bosib adfer y model, ceisiwch eto o.g.y.dd',
        'success' 		=> 'Model wedi adfer yn llwyddiannus.',
    ],

    'bulkedit' => [
        'error'   		=> 'Dim newid mewn manylder, felly dim byd i diweddaru.',
        'success' 		=> 'Modelau wedi diweddaru.',
    ],

    'bulkdelete' => [
        'error'   		    => 'Dim modelau wedi dewis, felly dim byd i\'w ddileu.',
        'success' 		    => ':success_count model(au) wedi dileu!',
        'success_partial' 	=> ':success_count model(au) wedi\'i dileu, :fail_count heb eu ddileu gan bod asedau wedi perthnasu iddo.',
    ],

];
