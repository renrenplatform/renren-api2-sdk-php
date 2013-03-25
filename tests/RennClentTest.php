<?php

/**
 * RennClent test case.
 */
class RennClentTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var RennClent
	 */
	private $RennClent;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated RennClentTest::setUp()
		
		$this->RennClent = new RennClent(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated RennClentTest::tearDown()
		$this->RennClent = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
}

