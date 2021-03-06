<?php

return [

    'does_not_exist' => 'A licença não existe.',
    'user_does_not_exist' => 'O usuário não existe.',
    'asset_does_not_exist' 	=> 'O ativo do qual você está tentando associar com esta licença não existe.',
    'owner_doesnt_match_asset' => 'O bem que você está tentando associar a está licença é propriedade de alguma outra pessoa que não está selecionada na lista suspensa.',
    'assoc_users'	 => 'Esta licença é atualmente check-out para um usuário e não pode ser excluído. Por favor, atualize seu bem para que não referencie mais este usuário e, em seguida, tente apagar novamente. ',
    'select_asset_or_person' => 'Você deve selecionar um ativo ou um usuário, mas não ambos.',
    'not_found' => 'Licença não encontrada',

    'create' => [
        'error'   => 'A licença não foi criada, tente novamente.',
        'success' => 'Licença criada com sucesso.',
    ],

    'deletefile' => [
        'error'   => 'O arquivo não foi excluído. Tente novamente.',
        'success' => 'Arquivo excluído com sucesso.',
    ],

    'upload' => [
        'error'   => 'O(s) arquivo(s) não foi/foram carregado(s). Tente novamente.',
        'success' => 'Arquivo(s) carregado(s) com sucesso.',
        'nofiles' => 'Você não selecionou arquivos para carregar, ou o arquivo que você esta tentando carregar é muito grande',
        'invalidfiles' => 'Um ou mais arquivos excedem o tamanho ou são do tipo de arquivo não permitido. Os tipos permitidos são png, gif, jpg, doc, docx, pdf, txt, zip, rar, and rtf.',
    ],

    'update' => [
        'error'   => 'A licença não foi atualizada, tente novamente',
        'success' => 'Licença atualizada com sucesso.',
    ],

    'delete' => [
        'confirm'   => 'Tem certeza de que deseja excluir esta licença?',
        'error'   => 'Houve um problema ao excluir esta licença. Tente novamente.',
        'success' => 'A licença foi excluída com sucesso.',
    ],

    'checkout' => [
        'error'   => 'Houve um problema de registro na licença. Favor tentar novamente.',
        'success' => 'A licença foi registrada com sucesso',
    ],

    'checkin' => [
        'error'   => 'Houve um problema de registro na licença. Favor tentar novamente.',
        'success' => 'A licença foi registrada com sucesso.',
    ],

];
