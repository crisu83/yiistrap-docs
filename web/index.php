<?php

ini_set('display_errors', 1);

$root       = dirname(__DIR__);
$yii        = $root . '/vendor/yiisoft/yii/framework/yiilite.php';
$global     = $root . '/app/helpers/global.php';
$builder    = $root . '/vendor/crisu83/yii-consoletools/helpers/ConfigHelper.php';

require_once($yii);
require_once($global);
require_once($builder);

$config = ConfigHelper::merge(array(
    $root . '/app/config/main.php',
    $root . '/app/config/web.php',
    $root . '/app/config/local.php',
));

Yii::createWebApplication($config)->run();
