<?php

$params = file_exists(__DIR__ . '/params.php') ? require __DIR__ . '/params.php' : [];
$local = file_exists(__DIR__ . '/main-local.php') ? require __DIR__ . '/main-local.php' : [];

return yii\helpers\ArrayHelper::merge(
    [
        'id' => 'app-site',
        'basePath' => dirname(__DIR__),
        'bootstrap' => ['log'],
        'controllerMap' => [

        ],
        'viewPath' => '@yashop-site/views',
        'params' => $params,
    ],
    $local
);