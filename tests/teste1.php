<?php
define ( 'TESTS_PATH',  dirname($argv[0]) . DIRECTORY_SEPARATOR );
require_once( TESTS_PATH . 'simpletest/autorun.php');
require_once( TESTS_PATH . '../src/sample.php');

class TestOfProgrammer extends UnitTestCase {
    function testLogCreatesNewFileOnFirstMessage() {
        $programmer = new Programmer( "Noinha", "100 anos", "analfa", "ishi" );
        $programmer->output();
    }
}

//$at = new AllTests();
//$at->run(new XMLReporter());
