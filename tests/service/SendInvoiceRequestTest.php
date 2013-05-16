<?php
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\PT\SendInvoiceRequest;
/**
 * Test class for SendInvoiceRequest.
 * 
 */
class SendInvoiceRequestTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var SendInvoiceRequest
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new SendInvoiceRequest;
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
    public function testToNVPString()
    {
        $requestEnvelope = new RequestEnvelope();
        $requestEnvelope->errorLanguage = "en_US";
      	$invoiceId = "INV-1111";
        $this->object = new SendInvoiceRequest($requestEnvelope , $invoiceId);
        $ret = $this->object->toNVPString();
        $this->assertEquals("requestEnvelope.errorLanguage=en_US&invoiceID=INV-1111", $ret);
    }
}
?>
