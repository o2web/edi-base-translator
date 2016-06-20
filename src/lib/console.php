#!/usr/bin/env php
<?php

if (php_sapi_name() !== 'cli') {
    die("You have to call this script in command line");
}

error_reporting(E_ALL);

require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\Console\Application;

$application = new Application();

$application->run();