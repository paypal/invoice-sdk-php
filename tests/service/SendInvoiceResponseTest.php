<?php
use PayPal\Types\PT\SendInvoiceResponse;
/**
 * Test class for SendInvoiceResponse.
 *
 */
class SendInvoiceResponseTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var SendInvoiceResponse
	 */
	protected $object;
	protected $map;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
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
	public function deserializationTest()
	{
		$this->map = array(
    		'responseEnvelope.ack' => 'Success',
			'responseEnvelope.timestamp' => '2011-05-29T23%3A58%3A46.879-07%3A00',
			'responseEnvelope.correlationId' =>  '2eba4859262a9',
			'responseEnvelope.build' =>  '1917403',
			'invoiceID' =>  'INV2-GEKM-LTFQ-7NWN-9YDL');

		$ret = $this->object = new SendInvoiceResponse();
		$ret->init($this->map);
		$this->assertEquals('INV2-GEKM-LTFQ-7NWN-9YDL' , $ret->invoiceID);
		$this->assertNull($ret->error);
		$this->assertEquals('Success', $ret->responseEnvelope->ack);
		$this->assertEquals('1917403', $ret->responseEnvelope->build);
		$this->assertEquals('2eba4859262a9', $ret->responseEnvelope->correlationId);
		$this->assertEquals('2011-05-29T23:58:46.879-07:00', $ret->responseEnvelope->timestamp);

	}
}
?>
