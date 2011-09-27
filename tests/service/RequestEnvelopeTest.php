<?php
require_once 'PHPUnit/Framework.php';

require_once 'services\Invoice\Invoice.php';

/**
 * Test class for RequestEnvelope.
 * 
 */
class RequestEnvelopeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var RequestEnvelope
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new RequestEnvelope("en_US");
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
        $this->object->detailLevel = "ReturnAll";
        $ret = $this->object->toNVPString();
        $this->assertEquals("detailLevel=ReturnAll&errorLanguage=en_US",$ret);
    }
}
?>
