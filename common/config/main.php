<?php
require_once 'aliases.php';

$local = file_exists(__DIR__ . '/main-local.php') ? require __DIR__ . '/main-local.php' : [];
$params = file_exists(__DIR__ . '/params.php') ? require __DIR__ . '/params.php' : [];

return yii\helpers\ArrayHelper::merge(
    [
        'name' => 'YaShop App',
        'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
        'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
        'language' => 'ru',
        'params' => $params
    ],
    $local
);
