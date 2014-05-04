<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
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
];
