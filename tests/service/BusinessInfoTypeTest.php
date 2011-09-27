<?php
require_once 'PHPUnit/Framework.php';

require_once 'services\Invoice\Invoice.php';

/**
 * Test class for BusinessInfoType.
 * 
 */
class BusinessInfoTypeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var BusinessInfoType
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new BusinessInfoType;
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
        $this->object->firstName = 'John';
        $this->object->lastName = 'Smith';
        $this->object->businessName = 'Invoicing';
        $this->object->phone = '235566788';
        $this->object->fax = '348678903';
        $this->object->website = 'www.invoicing.com';
        $this->object->customValue = 'Invoicing';
        $address = new BaseAddress("Main St", "San Jose", "US");      
        $address->line2 = '6th Avenue';
        $address->postalCode = '2345667';
        $address->state = 'California';
        $this->object->address = $address;
        $ret = $this->object->toNVPString();
       
      $this->assertEquals('firstName=John&lastName=Smith&businessName=Invoicing&phone=235566788&fax=348678903&website=www.invoicing.com&customValue=Invoicing&address.line1=Main+St&address.line2=6th+Avenue&address.city=San+Jose&address.state=California&address.postalCode=2345667&address.countryCode=US', $ret);

    }
}

?>
