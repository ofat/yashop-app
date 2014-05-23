<?php

$params = file_exists(__DIR__ . '/params.php') ? require __DIR__ . '/params.php' : [];
$local = file_exists(__DIR__ . '/main-local.php') ? require __DIR__ . '/main-local.php' : [];

return yii\helpers\ArrayHelper::merge(
    [
        'id' => 'app-site',
        'basePath' => dirname(__DIR__),
        'bootstrap' => ['log'],
        'controllerNamespace' => 'site\controllers',
        'controllerMap' => [
            'site' => 'yashop\site\controllers\SiteController',
            'user' => 'yashop\site\controllers\UserController',
            'item' => 'yashop\site\controllers\ItemController'
        ],
        'viewPath' => '@yashop-site/views',
        'params' => $params,
    ],
    $local
);