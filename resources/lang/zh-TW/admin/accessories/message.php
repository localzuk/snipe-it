<?php

return [

    'does_not_exist' => '配件 [:id] 不存在',
    'assoc_users'	 => '使用者目前已借出 :count 組配件。請在繳回配件後重試。 ',

    'create' => [
        'error'   => '新增配件失敗，請重試。',
        'success' => '新增配件成功。',
    ],

    'update' => [
        'error'   => '更新配件失敗，請重試。',
        'success' => '更新配件成功。',
    ],

    'delete' => [
        'confirm'   => '您確定要刪除此配件嗎？',
        'error'   => '刪除配件時發生問題。請再試一次。',
        'success' => '刪除配件成功。',
    ],

     'checkout' => [
        'error'   		=> '配件借出失敗。請再試一次。',
        'success' 		=> '借出配件成功。',
        'user_does_not_exist' => '使用者不正確。請再試一次。',
    ],

    'checkin' => [
        'error'   		=> '配件繳回失敗。請再試一次。',
        'success' 		=> '繳回配件成功。',
        'user_does_not_exist' => '使用者不正確。請再試一次。',
    ],

];
