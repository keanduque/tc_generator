<?php

/**
 * Summary : Terms & Condition Generator Unit Testing using PHPUnit
 * Description : use for UnitTesting the TermsGenerator.php
 * 
 * @link https://github.com/keanduque/tc_generator
 * @author Kean Duque
 */

use PHPUnit\Framework\TestCase;

use App\TermsGenerator;

final class TermsGeneratorTest extends TestCase
{
    private $generator;

    protected function setUp(): void
    {
        $this->generator = new TermsGenerator('templates/template.txt', 'dataset/clauses.json', 'dataset/sections.json');
    }

    public function testGenerate()
    {
        $expectedDocument = "A Terms & Conditions Document\r\n\r\nThis document is made of plaintext.\r\nIs made of And dies.\r\nIs made of The white horse is white.\r\nIs made of The quick brown fox, jumps over the lazy dog.\r\n\r\nYour legals.";
        //$expectedDocument = "A Terms & Conditions Document\r\n\r\nThis document is made of plaintext.\r\nIs made of And dies.\r\nIs made of The white horse is white.\r\nIs made of The quick brown fox.\r\n\r\nYour legals.";

        $this->assertEquals($expectedDocument, $this->generator->generateTC());
    }

    public function testClauseReplacement()
    {
        $this->assertEquals("And dies", $this->generator->getClauseText(3));
    }

    public function testSectionReplacement()
    {
        $this->assertEquals("The quick brown fox, jumps over the lazy dog", $this->generator->getSectionText(1));
    }
}
