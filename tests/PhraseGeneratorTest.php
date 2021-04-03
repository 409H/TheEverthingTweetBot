<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class PhraseGeneratorTest extends TestCase
{
    /**
     * @test
     * Checks to see if the phrase generated is ok
     */
    public function testPhraseIsOk(): void 
    {
        $phraser = new Phraser();
        $phrase = $phraser->generate();

        $this->assertMatchesRegularExpression('/^(\w+\s?)+?$/', $phrase);
    }
}