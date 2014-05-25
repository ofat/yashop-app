<?php
return [
    'components' => [
        'cache' => [
            'class' => '\yii\caching\MemCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yatest',
            'username' => 'root',
            'password' => '5304001',
            'charset' => 'utf8',
            'enableSchemaCache' => true
        ],
        'ses' => [
            'class' => 'yashop\ses\Mailer',
            'viewPath' => '@common/mail',
            'access_key' => 'AKIAINRAJKNQVYZE77RA',
            'secret_key' => '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'
        ],
        'sphinx' => [
            'class' => 'yii\sphinx\Connection',
            'dsn' => 'mysql:host=127.0.0.1;port=3312;',
            'username' => 'root',
            'password' => '5304001',
        ],
    ],
    'params' => [
        'staticUrl' => 'http://static.yashop'
    ]
];