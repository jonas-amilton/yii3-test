<?php

declare(strict_types=1);

return [
    'traceLink' => 'phpstorm://open?url=file://{file}&line={line}',
    
    'database' => [
        'host' => $_ENV['DB_HOST'] ?? 'localhost',
        'dbname' => $_ENV['DB_NAME'] ?? 'yii3',
        'username' => $_ENV['DB_USERNAME'] ?? 'root',
        'password' => $_ENV['DB_PASSWORD'] ?? '',
    ],
];
