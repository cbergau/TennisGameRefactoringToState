<?php

/** @var \Composer\Autoload\ClassLoader $autoloader */
$autoloader = require __DIR__ . '/../../vendor/autoload.php';
$autoloader->addPsr4('TennisGame\\', realpath(__DIR__) . '/TennisGame');
