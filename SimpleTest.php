<?php

use PHPUnit\Framework\TestCase;

require_once "Wordcount.php";

class SimpleTest extends TestCase {
    public function testCountWords () {
        $Wc = new WordCount();

        $TestSentence = "My Name Is Gabriel";
        $WordCount = $Wc ->countWords($TestSentence);

        $this -> assertEquals(4, $WordCount);
    }
}
?>