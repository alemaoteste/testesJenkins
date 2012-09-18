<?php
require_once( TESTS_PATH . 'simpletest/autorun.php');
require_once( TESTS_PATH . '../src/sample.php');

class TestOfProgrammer extends UnitTestCase {
    function testLogCreatesNewFileOnFirstMessage() {
        $programmer = new Programmer( "Noinha", "100 anos", "analfa", "ishi" );
    }
}

//$at = new AllTests();
//$at->run(new XMLReporter());
