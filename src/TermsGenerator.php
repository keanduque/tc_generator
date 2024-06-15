<?php

/**
 * Summary : Terms & Condition Generator 
 * Description : Terms & Condition Generator Class for generate template based on clauses and sections data
 * 
 * @link https://github.com/keanduque/tc_generator
 * @author Kean Duque
 */

namespace App;

class TermsGenerator
{
    // private properties needed for passing data (clauses, sections) and template
    private $template;
    private $clauses;
    private $sections;

    // initialize constructor for respective content and data for template
    public function __construct($template_file = '', $clauses_data = '', $sections_data = '')
    {
        $this->template    = file_get_contents($template_file);
        $this->clauses     = $clauses_data != "" ? json_decode(file_get_contents($clauses_data), true) : "no clauses available";
        $this->sections    = $sections_data != "" ? json_decode(file_get_contents($sections_data), true) : "no section available";

        echo "<pre>";
        var_dump($this->template);
        var_dump($this->clauses);
        var_dump($this->sections);
        echo "</pre>";
    }
}
