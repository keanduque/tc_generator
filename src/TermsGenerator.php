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

    /*
    array(4) {
        [0]=>
        array(2) {
            ["id"]=>
            int(1)
            ["text"]=>
            string(19) "The quick brown fox"
        }
        [1]=>
        array(2) {
            ["id"]=>
            int(2)
            ["text"]=>
            string(23) "jumps over the lazy dog"
        }
        [2]=>
        array(2) {
            ["id"]=>
            int(3)
            ["text"]=>
            string(8) "And dies"
        }
        [3]=>
        array(2) {
            ["id"]=>
            int(4)
            ["text"]=>
            string(24) "The white horse is white"
        }
        }
    */
    /**
     * getting clauses data by id to retrieve json file before passing to template
     *
     * @param int $id Required
     * @return mixed JSON array for clauses data
     */
    private function getClauseData($id)
    {
    }
}
