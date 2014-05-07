<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yashop',
            'username' => 'root',
            'password' => '5304001',
            'charset' => 'utf8',
        ],
        'ses' => [
            'class' => 'yashop\ses\Mailer',
            'viewPath' => '@common/mail',
            'access_key' => 'AKIAINRAJKNQVYZE77RA',
            'secret_key' => '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'
        ],
    ],
];