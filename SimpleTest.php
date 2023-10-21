<?php 
use PHPUnit\Framework\TestCase;
require_once "wordcount.php";
class SimpleTest extends TestCase {
    public function testCountWords() {
        $Wc = new Wordcount();
        $TestSentence = "My name is Fina";
        $Wordcount = $Wc->countWords($TestSentence);
        $this->assertEquals(4, $Wordcount);
    }
}
?>