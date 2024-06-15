<?php

declare(strict_types=1);

require_once("src/TermsGenerator.php");

use App\TermsGenerator;

$terms_generate = new TermsGenerator('templates/template.txt', 'dataset/clauses.json', 'dataset/sections.json');
