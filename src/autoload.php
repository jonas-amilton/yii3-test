<?php

declare(strict_types=1);

use App\Environment;
use Symfony\Component\Dotenv\Dotenv;

require_once dirname(__DIR__) . '/vendor/autoload.php';

if (file_exists(dirname(__DIR__) . '/.env')) {
    (new Dotenv())->loadEnv(dirname(__DIR__) . '/.env');
}

Environment::prepare();
