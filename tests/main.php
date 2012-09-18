<?php
require_once('simpletest/autorun.php');
require_once('simpletest/reporter.php');
require_once('simpletest/xml.php');
//require_once( TESTS_PATH . '../simpletest/unit_tester.php');
//require_once( TESTS_PATH . '../simpletest/reporter.php');
//require_once( TESTS_PATH . '../simpletest/xml.php');

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('All tests');
        $this->addFile( 'teste1.php');
    }
}
$at = new AllTests();
$at->run(new XMLReporter());
