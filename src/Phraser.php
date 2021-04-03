<?php
declare(strict_types=1);

final class Phraser
{
    private $phrase;
    private $nounFile = __DIR__ .'/../data/nouns.txt';
    private $adjectiveFile = __DIR__ .'/../data/adjectives.txt';

    public function __construct()
    {
        return $this;
    }

    public function generate(): string
    {
        $phrase = [
            $_ENV["WORDS_PREFIX"] ?? '',
            ucwords($this->getAdjective()),
            ucwords($this->getNoun()),
            $_ENV["WORDS_SUFFIX"] ?? ''
        ];

        return trim(implode($_ENV["WORDS_SEPARATOR"] ?? ' ', $phrase));
    }

    private function getNoun(): string
    {
        $contents = file($this->nounFile);
        return trim($contents[rand(0, count($contents) - 1)]);
    }

    private function getAdjective(): string
    {
        $contents = file($this->adjectiveFile);
        return trim($contents[rand(0, count($contents) - 1)]);
    }
}
