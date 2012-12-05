<?php
require_once 'services\Invoice\Invoice.php';

/**
 * Test class for InvoiceType.
 *
 */
class InvoiceTypeTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var InvoiceType
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
		$item1 = new InvoiceItemType('item1', '3', '5');
		$item2 = new InvoiceItemType('Iitem2', '3', '5');

		$items = array($item1, $item2);
		$itemList = new InvoiceItemListType();
		$itemList->item =  $items;
		$items =array(new InvoiceItemType("product1", 10.0, 1.2));
		$this->object = new InvoiceType("jb-us-seller1@paypal.com", "jbui-us-personal1@paypal.com", $itemList, "USD", 'DUEONRECEIPT');

		$busInfo = new BusinessInfoType();
		$busInfo->firstName = "John";
		$busInfo->lastName = "Smith";
		$busInfo->address = new BaseAddress("Main St", "San Jose", "US");

		 
		$this->object->number ="INV-2011";
		$this->object->merchantInfo =$busInfo;

		 
		$this->object->invoiceDate = "23-Jun-2011";
		$this->object->dueDate = "30-Jun-2011";
		 
		$this->object->discountAmount = 100.0;
		$this->object->discountPercent = 12.0;
		$this->object->note = "Invoicing Product";
		$this->object->terms ="Invoice";
		$this->object->merchantMemo ="Invoicing Product";
		$this->object->billingInfo = $busInfo;
		$this->object->shippingAmount = 200.0;
		$this->object->shippingInfo =$busInfo;
		$this->object->shippingTaxName = "Invoicing Product";
		$this->object->shippingTaxRate = 12.5;
		$ret = $this->object->toNVPString('invoice.');
		$this->assertEquals("invoice.merchantEmail=jb-us-seller1%40paypal.com&invoice.payerEmail=jbui-us-personal1%40paypal.com&invoice.number=INV-2011&invoice.merchantInfo.firstName=John&invoice.merchantInfo.lastName=Smith&invoice.merchantInfo.address.line1=Main+St&invoice.merchantInfo.address.city=San+Jose&invoice.merchantInfo.address.countryCode=US&invoice.itemList.item(0).name=item1&invoice.itemList.item(0).quantity=3&invoice.itemList.item(0).unitPrice=5&invoice.itemList.item(1).name=Iitem2&invoice.itemList.item(1).quantity=3&invoice.itemList.item(1).unitPrice=5&invoice.currencyCode=USD&invoice.invoiceDate=23-Jun-2011&invoice.dueDate=30-Jun-2011&invoice.paymentTerms=DUEONRECEIPT&invoice.discountPercent=12&invoice.discountAmount=100&invoice.terms=Invoice&invoice.note=Invoicing+Product&invoice.merchantMemo=Invoicing+Product&invoice.billingInfo.firstName=John&invoice.billingInfo.lastName=Smith&invoice.billingInfo.address.line1=Main+St&invoice.billingInfo.address.city=San+Jose&invoice.billingInfo.address.countryCode=US&invoice.shippingInfo.firstName=John&invoice.shippingInfo.lastName=Smith&invoice.shippingInfo.address.line1=Main+St&invoice.shippingInfo.address.city=San+Jose&invoice.shippingInfo.address.countryCode=US&invoice.shippingAmount=200&invoice.shippingTaxName=Invoicing+Product&invoice.shippingTaxRate=12.5", $ret);
		
	}


}



?>