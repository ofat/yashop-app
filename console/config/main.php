<?php
/**
 * @author Vitaliy Ofat <ofatv22@gmail.com>
 */
return [
    'controllerMap' => [
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => '@yashop-console/migrations',
        ],
        'fixture' => [
            'class' => 'yii\faker\FixtureController',
            'templatePath' => '@yashop-common/tests/templates/fixtures',
            'fixtureDataPath' => '@yashop-common/tests/fixtures/data',
            'namespace' => 'yashop\common\tests\fixtures'
        ],
    ],
];