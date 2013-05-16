<?php
use PayPal\Types\Common\FaultMessage;
/**
 * Test class for FaultMessage.
 *
 */
class FaultMessageTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var FaultMessage
	 */
	protected $object;
	protected $map;
	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->map =  array(
			"responseEnvelope.ack"=> "Success",
			"responseEnvelope.timestamp"=>
			"2011-05-29T23%3A58%3A46.879-07%3A00",
			"responseEnvelope.correlationId"=> "2eba4859262a9",
			"responseEnvelope.build"=> "1917403",
			"error(0).errorId"=> "520003",
			"error(0).domain"=> "Platform",
			"error(0).subdomain"=> "Application",
			"error(0).severity"=> "Error",
			"error(0).category"=> "Application",
			"error(0).message"=>
			"Authentication+failed.+API+credentials+are+incorrect",
			"error(0).exceptionId"=> "520003",
			"error(1).errorId"=> "580022",
			"error(1).domain"=> "PLATFORM",
			"error(1).subdomain"=> "Application",
			"error(1).severity"=> "Error",
			"error(1).category"=> "Application",
			"error(1).message"=>
			"Invalid+request+parameter%3A+shippingTaxName+cannot+be+null",
			"error(1).parameter(0)"=> "shippingTaxName",
			"error(1).parameter(1)"=> "null");
		 
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
	public function testFaultMessage()
	{
		$ret = $this->object = new FaultMessage();
		$ret->init($this->map);
		$this->assertEquals("Success", $this->object->responseEnvelope->ack);
		$this->assertEquals("2011-05-29T23:58:46.879-07:00",$this->object->responseEnvelope->timestamp);
		$this->assertEquals("2eba4859262a9", $this->object->responseEnvelope->correlationId);
		$this->assertEquals("1917403", $this->object->responseEnvelope->build);
		$this->assertEquals("520003", $this->object->error[0]->errorId);
		$this->assertEquals("Platform", $this->object->error[0]->domain);
		$this->assertEquals("Application", $this->object->error[0]->subdomain);
		$this->assertEquals("Error", $this->object->error[0]->severity);
		$this->assertEquals("Application", $this->object->error[0]->category);
		$this->assertEquals("Authentication failed. API credentials are incorrect", $this->object->error[0]->message);
		$this->assertEquals("520003", $this->object->error[0]->exceptionId);
		$this->assertEquals("580022", $this->object->error[1]->errorId);
		$this->assertEquals("PLATFORM", $this->object->error[1]->domain);
		$this->assertEquals("Application", $this->object->error[1]->subdomain);
		$this->assertEquals("Error", $this->object->error[1]->severity);
		$this->assertEquals("Application", $this->object->error[1]->category);
		$this->assertEquals("Invalid request parameter: shippingTaxName cannot be null", $this->object->error[1]->message);


	}
}
?>
