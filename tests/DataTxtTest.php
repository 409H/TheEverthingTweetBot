<?php
declare(strict_Types=1);
use PHPUnit\Framework\TestCase;

final class DataTxtTest extends TestCase
{
    /**
     * @test
     * Checks to ensure the data files exist
     * Files live in ../data/{adjectives, nouns}.txt
     */
    public function testDataFileAdjectivesExists(): void 
    {
        $filename = __DIR__ ."/../data/adjectives.txt";
        $this->assertFileExists(
            $filename,
            "adjectives.txt does not exist in data directory"
        );
    }

    /**
     * @test
     * Checks to ensure the data files exist
     * Files live in ../data/{adjectives, nouns}.txt
     */
    public function testDataFileNounsExists(): void 
    {
        $filename = __DIR__ ."/../data/nouns.txt";
        $this->assertFileExists(
            $filename,
            "nouns.txt does not exist in data directory"
        );
    }

    /**
     * @test
     * Checks to ensure the data files are readable
     * Files live in ../data/{adjectives, nouns}.txt
     */
    public function testDataFileAdjectivesIsReadable(): void 
    {
        $filename = __DIR__ ."/../data/adjectives.txt";
        $this->assertFileIsReadable(
            $filename
        );
    }

    /**
     * @test
     * Checks to ensure the data files are readable
     * Files live in ../data/{adjectives, nouns}.txt
     */
    public function testDataFileNounsIsReadable(): void 
    {
        $filename = __DIR__ ."/../data/nouns.txt";
        $this->assertFileIsReadable(
            $filename
        );
    }
}