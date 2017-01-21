<?php
$params = require(__DIR__ . '/params.php');
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'index',
    'modules' => [

    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'O-D0GHz.{BMPRhLBAc:T+rr(~sNjGq<snQSP.|:KUy]U9z@bES!6?u }.NGx[Z+x',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/restful.php'),
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
            'enableSession' => false,
        ],
        'cache' => [
            'class'=>'yii\caching\FileCache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        //'mongodb' => [
        //    'class' => '\yii\mongodb\Connection',
        //    'dsn' => 'mongodb://192.168.1.2:27017/information',
        //],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=rm-m5e8s5y3a0rcffu72.mysql.rds.aliyuncs.com;dbname=derutang',
            'username' => 'derutang',
            'password' => 'BKjV#t3BUgm&o5iP',
            'charset' => 'utf8',
            'tablePrefix' => ''
        ],
        'assetManager' => [
            'bundles' => [
                'all' => [
                    'class' => 'yii\web\AssetBundle',
                    'basePath' => '@webroot',//为了把AppAsset.php挪出assets文件夹,默认设置为 @webroot/assets
                    'baseUrl' => '@web',//同上
                ]
            ],
        ]
    ],
    'params' => $params,
];

//if (YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
  //  $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = 'yii\debug\Module';
//}

return $config;
