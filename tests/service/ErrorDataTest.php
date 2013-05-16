<?php
use PayPal\Types\Common\ErrorData;
/**
 * Test class for ErrorData.
 *
 */
class ErrorDataTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var ErrorData
	 */
	protected $object;
	protected $map;
	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->map = array(
			"errorId" => "520003",	
			"domain"=> "Platform",
			"subdomain"=> "Application",
			"severity"=> "Error",
			"category"=> "Application",
			"message"=>
			"Authentication+failed.+API+credentials+are+incorrect",
			"exceptionId"=> "520003",
			"parameter(0)"=> "API Credentials",
			"parameter(1)"=> "Incorrect",
		);

	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}
	/**
     * @test
     */
	public function testErrorData()
	{
		$this->object = new ErrorData();
		$this->object->init($this->map);
		$this->assertEquals("520003", $this->object->errorId);
		$this->assertEquals("Platform",$this->object->domain);
		$this->assertEquals("Application",$this->object->subdomain);
		$this->assertEquals("Error",$this->object->severity);
		$this->assertEquals("Application",$this->object->category);
		$this->assertEquals("Authentication failed. API credentials are incorrect",$this->object->message);
		$this->assertEquals("520003", $this->object->exceptionId);
		//$this->assertEquals("API Credentials",$this->object->parameter[0]);
	//	$this->assertEquals("Incorrect",$this->object->parameter);
	
	}
}
?>
