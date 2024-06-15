<?php


use PHPUnit\Framework\TestCase;

require_once('../src/TermsGenerator.php');

use App\TermsGenerator;

class TermsGeneratorInitTest extends TestCase
{
    private $generator;

    protected function setUp(): void
    {
        $this->generator = new TermsGenerator('templates/template.txt', 'dataset/clauses.json', 'dataset/sections.json');
    }

    public function testGenerate()
    {
        $expectedDocument = "A Terms & Conditions Document\n\nThis document is made of plaintext.\nIs made of And dies.\nIs made of The white horse is white.\nIs made of The quick brown fox.\n\nYour legals.\n";
        $this->assertEquals($expectedDocument, $this->generator->generateTC());
    }

    public function testClauseReplacement()
    {
        $this->assertEquals("And dies", $this->generator->getClauseText(3));
    }

    public function testSectionReplacement()
    {
        $this->assertEquals("The quick brown fox jumps over the lazy dog", $this->generator->getSectionText(1));
    }
}
