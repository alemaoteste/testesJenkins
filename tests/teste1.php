<?php
//require_once( TESTS_PATH . '../simpletest/unit_tester.php');
//require_once( TESTS_PATH. '../simpletest/reporter.php');
//require_once( TESTS_PATH . '../simpletest/xml.php');
require_once('simpletest/autorun.php');
require_once('../src/sample.php');

class TestOfProgrammer extends UnitTestCase {
    function testLogCreatesNewFileOnFirstMessage() {
        $programmer = new Programmer( "Noinha", "100 anos", "analfa", "ishi" );
        $programmer->output();
    }
}

//$at = new AllTests();
//$at->run(new XMLReporter());
