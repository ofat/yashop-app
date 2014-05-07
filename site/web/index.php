<?php
/**
 * @author Vitaliy Ofat <ofatv22@gmail.com>
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$vendorYaShop = __DIR__ . '/../../vendor/ofat/yii2-yashop';

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');

require($vendorYaShop . '/common/config/aliases.php');
require(__DIR__ . '/../../common/config/aliases.php');

$config = yii\helpers\ArrayHelper::merge(
    require($vendorYaShop . '/common/config/main.php'),
    require($vendorYaShop . '/site/config/main.php'),

    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
