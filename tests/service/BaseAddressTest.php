<?php
require_once 'PHPUnit/Framework.php';

require_once 'services\Invoice\Invoice.php';

/**
 * Test class for BaseAddress.
 * 
 */
class BaseAddressTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var BaseAddress
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new BaseAddress("Main St", "San Jose", "US");
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
        $this->object->line2 = '6th Avenue';
        $this->object->postalCode = '2345667';
        $this->object->state = 'California';
        $ret = $this->object->toNVPString();
        $this->assertEquals('line1=Main+St&line2=6th+Avenue&city=San+Jose&state=California&postalCode=2345667&countryCode=US', $ret);
        		
    }
}
?>
