<?php

require_once(__DIR__ . '/../../vendor/ofat/yii2-yashop/common/config/aliases.php');

Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('site', dirname(dirname(__DIR__)) . '/site');
Yii::setAlias('admin', dirname(dirname(__DIR__)) . '/admin');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('static', dirname(dirname(__DIR__)) . '/static');