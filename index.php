<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
require(__DIR__.'/config/constant.php');
$config = require(__DIR__ . '/config/main.php');

//公共方法
require(__DIR__ . '/function.php');
//引入 Yii 框架的文件 Yii.php
require(__DIR__ . '/../yii2/Yii.php');

// 用 $config 作为 yii\web\Application 初始化的参数
(new yii\web\Application($config))->run();
