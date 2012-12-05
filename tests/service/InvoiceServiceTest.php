<?php
require_once 'services\Invoice\InvoiceService.php';

/**
 * Test class for InvoiceService.
 *
 */
class InvoiceServiceTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var InvoiceService
	 */
	protected $object;
	public static $invoicID;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new InvoiceService;
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
	public function testCreateInvoice()
	{
		$item1 = new InvoiceItemType('item_name1','1', '1');
		$item2 = new InvoiceItemType('item_name2','2', '2');
		$items = array($item1, $item2);
		$itemList = new InvoiceItemListType();
		$itemList->item =  $items;
		$invoice = new InvoiceType('jb-us-seller@paypal.com', 'jbui-us-personal1@paypal.com', $itemList, 'USD', 'DueOnReceipt');
		$requestEnvelope = new RequestEnvelope();
		$requestEnvelope->errorLanguage = "en_US";
		$createInvoiceRequest = new CreateInvoiceRequest($requestEnvelope, $invoice);
		$invoice_service = new InvoiceService();

		$ret = $invoice_service->CreateInvoice($createInvoiceRequest, 'jb-us-seller_api1.paypal.com');


		self::$invoicID = $ret->invoiceID;
		$this->assertNotNull($ret);
		$this->assertNotNull($ret->invoiceID);
		$this->assertEquals(0, count($ret->error));

	}

	/**
	 * @test
	 * Test case for permissions service integration
	 */
	public function testCreateInvoiceForThirdParty()
	{
		$item1 = new InvoiceItemType('item_name1','1', '1');
		$item2 = new InvoiceItemType('item_name2','2', '2');
		$items = array($item1, $item2);
		$itemList = new InvoiceItemListType();
		$itemList->item =  $items;
		$invoice = new InvoiceType('jb-us-seller@paypal.com', 'jbui-us-personal1@paypal.com', $itemList, 'USD', 'DueOnReceipt');
		$requestEnvelope = new RequestEnvelope();
		$requestEnvelope->errorLanguage = "en_US";
		$createInvoiceRequest = new CreateInvoiceRequest($requestEnvelope, $invoice);
		$invoice_service = new InvoiceService();
		$invoice_service->setAccessToken("iHJRdaLaHlROHt6OxkH29I53ZvCHdgEhBdMWxu4OyoB9AaKkS5YlWw");
		$invoice_service->setTokenSecret("3M5zkwsU-F0OKhvsuSJmITYJueg");
		$ret = $invoice_service->CreateInvoice($createInvoiceRequest, 'jb-us-seller_api1.paypal.com');
		$this->assertNotNull($ret);
		//$this->assertNotNull($ret->invoiceID);
		//$this->assertEquals(0, count($ret->error));

	}

	/**
	 * @test
	 */
	public function checkSendInvoice() {

		$env = new RequestEnvelope();
		$env->errorLanguage = "en_US";
		$env->detailLevel = "ReturnAll";
		$req = new SendInvoiceRequest();
		$req->invoiceID = self::$invoicID;
		$req->requestEnvelope = $env;
		$invc = new InvoiceService();
		$ret = $invc->SendInvoice($req);
		$this->assertNotNull($ret);

		$this->assertNotNull($ret->invoiceID);
		$this->assertEquals(0, count($ret->error));
	}

	/**
	 * @test
	 */
	public function testCreateAndSendInvoice()
	{
		$item1 = new InvoiceItemType('item_name1','1', '1');
		$item2 = new InvoiceItemType('item_name2','2', '2');
		$items = array($item1, $item2);
		$itemList = new InvoiceItemListType();
		$itemList->item =  $items;
		$invoice = new InvoiceType('jb-us-seller@paypal.com', 'jbui-us-personal1@paypal.com', $itemList, 'USD', 'DueOnReceipt');
		$requestEnvelope = new RequestEnvelope();
		$requestEnvelope->errorLanguage = "en_US";
		$createInvoiceRequest = new CreateInvoiceRequest($requestEnvelope, $invoice);
		$invoice_service = new InvoiceService();

		$ret = $invoice_service->CreateInvoice($createInvoiceRequest, 'jb-us-seller_api1.paypal.com');

		$this->assertNotNull($ret);
		$this->assertNotNull($ret->invoiceID);
		$this->assertEquals(0, count($ret->error));
	}
}
?>
