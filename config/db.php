<?php

return [
    'class' => 'yii\db\Connection',
    // 'dsn' => 'sqlite:host=localhost;dbname=yii2basic',
    'dsn' => 'sqlite:'.realpath("C:\OSPanel\modules\system\html\openserver\adminer\TableRates.sqlite") .'',
    'username' => 'root',
    'password' => 'admin',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
