<?php

$vendorYaShop = __DIR__ . '/../../../vendor/ofat/yii2-yashop';

return yii\helpers\ArrayHelper::merge(
    require($vendorYaShop . '/common/config/main.php'),
    require($vendorYaShop . '/console/config/main.php'),
    require(__DIR__ . '/../../../common/config/main.php'),
    require(__DIR__ . '/../../../common/config/main-local.php'),
    require(__DIR__ . '/../../../console/config/main.php'),
    [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=yatest',
            ],
        ],
    ]
);
