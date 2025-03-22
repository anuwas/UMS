<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
		'defaultRoute' => 'index/index',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

    		'request'=>[
    				'class' => 'common\components\Request',
    				'web'=> '/frontend/web',
    				'parsers' => [
                		'application/json' => 'yii\web\JsonParser', // required for POST input via `php://input`
            		],
    		],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            		'login' => 'index/login',
            		'signup' => 'index/signup',
            		'register-service-provider' => 'index/registerserviceprovider',
            		'register-healthcare-agencies' => 'index/registerhealthcareagencies',
            		'terms-conditions' => 'index/termsconditions',
            		'privacy-policy' => 'index/privacypolicy',
            		'forgot-password' => 'index/forgotpassword',
            ],
        ],
       
    ],
    'params' => $params,
];
