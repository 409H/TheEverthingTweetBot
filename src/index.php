<?php
declare(strict_types=1);
require_once __DIR__ ."/../vendor/autoload.php";

// Init dependencies
if (file_exists(__DIR__ . '/../.env')) {
    // Check this file exists for local development - Heroku will use heroku config:set
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
    $dotenv->load();
}

$arrTwitterSettings = array(
    'oauth_access_token' => $_ENV["TWITTER_OAUTH_ACCESS_TOKEN"],
    'oauth_access_token_secret' => $_ENV["TWITTER_OAUTH_ACCESS_TOKEN_SECRET"],
    'consumer_key' => $_ENV["TWITTER_CONSUMER_KEY"],
    'consumer_secret' => $_ENV["TWITTER_CONSUMER_SECRET"]
);

$objPhraser = new Phraser;

$objTwitter = new TwitterAPIExchange($arrTwitterSettings);
$strTweetResponse = $objTwitter->buildOauth('https://api.twitter.com/1.1/statuses/update.json', "POST")
    ->setPostfields([
        "status" => $objPhraser->generate()
    ])
    ->performRequest();
