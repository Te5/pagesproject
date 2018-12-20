<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
/*        'view' => [
        'theme' => [
            'basePath' => '@app/themes/cleanb',
            'baseUrl' => '@web/themes/cleanb',
            'pathMap' => [
                '@app/views' => '@app/themes/cleanb',
                '@app/modules' => '@app/themes/basic/modules',
            ],
        ],
    ],   */ 

    ],
    'modules' => [ 
        'pagesmodule' => [ 
            'class' => 'common\modules\pagesmodule\Pages', 
        ], 
    ],    
];
