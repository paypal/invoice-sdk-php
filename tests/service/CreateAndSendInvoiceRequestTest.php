<?php
require_once 'PHPUnit/Framework.php';

require_once 'services\Invoice\Invoice.php';

/**
 * Test class for CreateAndSendInvoiceRequest.
 * 
 */
class CreateAndSendInvoiceRequestTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var CreateAndSendInvoiceRequest
     */
    protected $object;

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
    public function testToNVPString()
    {
       $requestEnvelope = new RequestEnvelope('en_US');

       $item1 = new InvoiceItemType('item1', '3', '5');
       $item2 = new InvoiceItemType('Iitem2', '3', '5');
	   $items = array($item1, $item2);
	   $itemList = new InvoiceItemListType();
	   $itemList->item =  $items;
       $invoice = new InvoiceType('jb-us-seller1@paypal.com', 'jbui-us-personal1@paypal.com', $itemList, 'USD', 'DUEONRECEIPT');        

        $this->object = new CreateAndSendInvoiceRequest($requestEnvelope , $invoice);
        $ret = $this->object->toNVPString();
        $this->assertEquals('requestEnvelope.errorLanguage=en_US&invoice.merchantEmail=jb-us-seller1%40paypal.com&invoice.payerEmail=jbui-us-personal1%40paypal.com&invoice.itemList.item(0).name=item1&invoice.itemList.item(0).quantity=3&invoice.itemList.item(0).unitPrice=5&invoice.itemList.item(1).name=Iitem2&invoice.itemList.item(1).quantity=3&invoice.itemList.item(1).unitPrice=5&invoice.currencyCode=USD&invoice.paymentTerms=DUEONRECEIPT', $ret);
    }
}
?>
