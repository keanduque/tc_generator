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
        $this->clauses     = $clauses_data != '' ? json_decode(file_get_contents($clauses_data), true) : "no available clauses";
        $this->sections    = $sections_data != '' ? json_decode(file_get_contents($sections_data), true) : "no available sections";
    }
    /**
     * getting clauses text by id to retrieve json file before passing to template
     * @method getClauseText(id)
     * @param int $id for clauses
     * @return mixed JSON array for clauses data
     */
    public function getClauseText($id)
    {
        foreach ($this->clauses as $clause) {
            // echo "<pre>";
            // var_dump($clause['id'] === $id);
            // echo "</pre>";
            if ($clause['id'] == $id) {
                //return $clause['text'] . ' ' . "{[$id]}";
                return $clause['text'];
            }
        }
        return '';
    }
    /**
     * getting sections text by id to retrieve json file before passing to template
     * @method getSectionText(id)
     * @param int $id for sections
     * @return mixed JSON array for section data
     */
    public function getSectionText($id)
    {
        foreach ($this->sections as $section) {
            if ($section['id'] == $id) {
                // map array from clausetext based on clauses_ids
                $clausesTxt = array_map([$this, 'getClauseText'], $section['clauses_ids']);
                $joinClauses = implode(', ', $clausesTxt);
                return $joinClauses;
            }
        }
        return '';
    }

    /**
     * create method for generating Clauses and Section together and assign to template 
     * @method generateTC()
     * @return mixed template document
     */
    public function generateTC()
    {
        $document_file = $this->template;

        // Replace CLAUSE tags
        $document_file = preg_replace_callback('/\[CLAUSE-(\d+)\]/', function ($matches) {
            $clauseId = $matches[1];
            return $this->getClauseText($clauseId);
        }, $document_file);

        // Replace SECTION tags
        $document_file = preg_replace_callback('/\[SECTION-(\d+)\]/', function ($matches) {
            $sectionId = $matches[1];
            return $this->getSectionText($sectionId);
        }, $document_file);

        // $document_template =  $this->replaceTags($document_file, '/\[CLAUSE-(\d+)\]/', $this->getClauseText($clauseId));

        return $document_file;
    }

    // public function replaceTags($template, $search_txt, $callback)
    // {
    //     // Replace CLAUSE tags
    //     $document_file = preg_replace_callback($search_txt, function ($matches) {
    //         $clauseId = $matches[1];
    //         $callback($clauseId);
    //     }, $template);

    //     return $document_file;
    // }
}

/*
// Clauses data guide from var_dump: 
array(4) {
    [0]=>
    array(2) {
        ["id"]=>  int(1)
        ["text"]=> string(19) "The quick brown fox"
    }
    [1]=>
    array(2) {
        ["id"]=> int(2)
        ["text"]=> string(23) "jumps over the lazy dog"
    }
    [2]=>
    array(2) {
        ["id"]=> int(3)
        ["text"]=> string(8) "And dies"
    }
    [3]=>
    array(2) {
        ["id"]=> int(4)
        ["text"]=> string(24) "The white horse is white"
    }
}
*/

/*
// sections data guide from var_dump: 
array(1) {
    [0]=>
    array(2) {
        ["id"]=>
        int(1)
        ["clauses_ids"]=>
            array(2) {
                [0]=> int(1)
                [1]=> int(2)
            }
    }
} */