<?php

/**
 * Summary : Terms & Condition Generator 
 * Description : Terms & Condition Generator Class for generate template based on clauses and sections data
 * 
 * @link https://github.com/keanduque/tc_generator
 * @author Kean Duque
 */
class TermsGenerator
{
    // properties needed for passing data and template
    private $template_file;
    private $clauses;
    private $sections;

    // initialize constructor for respective content and data for template
    public function __construct($template_file, $clauses, $sections)
    {
        $this->template_file = file_get_contents($template_file);
        echo "<pre>";
        var_dump($this->template_file);
        echo "</pre>";
    }
}

$terms = new TermsGenerator('templates/template.txt', 'data/clauses.json', 'data/sections.json');
