<?php

$params = file_exists(__DIR__ . '/params.php') ? require __DIR__ . '/params.php' : [];
$local = file_exists(__DIR__ . '/main-local.php') ? require __DIR__ . '/main-local.php' : [];

return yii\helpers\ArrayHelper::merge(
    [
        'id' => 'app-admin',
        'basePath' => dirname(__DIR__),
        'controllerNamespace' => 'admin\controllers',
        'bootstrap' => ['log'],
        'defaultRoute' => 'dashboard',
        'controllerMap' => [
            'dashboard' => '\yashop\admin\controllers\DashboardController',
            'user' => 'yashop\admin\controllers\UserController'
        ],
        'viewPath' => '@yashop-admin/views',
        'components' => [
            'urlManagerSite' => [
                'baseUrl' => 'http://yashop/'
            ],
        ],
        'params' => $params,
    ],
    $local
);