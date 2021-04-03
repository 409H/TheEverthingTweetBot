<?php
declare(strict_types=1);
require_once __DIR__ ."/../vendor/autoload.php";

// Init dependencies
if (file_exists(__DIR__ . '/../.env')) {
    // Check this file exists for local development - Heroku will use heroku config:set
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
    $dotenv->load();
}

$objPhraser = new Phraser;

var_dump($objPhraser->generate());
