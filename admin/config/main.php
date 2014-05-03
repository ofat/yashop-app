<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
);

return [
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
];
