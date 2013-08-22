<?php
use PayPal\Service\InvoiceService;
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\PT\CreateInvoiceRequest;
use PayPal\Types\PT\InvoiceItemListType;
use PayPal\Types\PT\InvoiceItemType;
use PayPal\Types\PT\InvoiceType;
use PayPal\Auth\PPSignatureCredential;
use PayPal\Auth\PPTokenAuthorization;

require_once('PPBootStrap.php');
session_start();

/*
 *  # CreateInvoice API
 Use the CreateInvoice API operation to create a new invoice. The call includes merchant, payer, and API caller information, in addition to invoice detail. The response to the call contains an invoice ID and URL.
 This sample code uses Invoice PHP SDK to make API call
 */
?>
<html>
<head>
	<title>PayPal Invoicing - CreateInvoice Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
	<h2>CreateInvoice API Test Page</h2>
<?php

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	/*
	 *  InvoiceItemType which takes mandatory params:
		
		 * `Item Name` - SKU or name of the item.
		 * `Quantity` - Item count.
		 * `Amount` - Price of the item, in the currency specified by the
		 invoice.
	 */
	$item1 = new InvoiceItemType($_POST['item_name1'], $_POST['item_quantity1'], $_POST['item_unitPrice1']);
	$item2 = new InvoiceItemType($_POST['item_name2'], $_POST['item_quantity2'], $_POST['item_unitPrice2']);
	$itemList = new InvoiceItemListType();
	$itemList->item = array($item1, $item2);
	
	/*
	 *  InvoiceType which takes mandatory params:
		
		 * `Merchant Email` - Merchant email address.
		 * `Personal Email` - Payer email address.
		 * `InvoiceItemList` - List of items included in this invoice.
		 * `CurrencyCode` - Currency used for all invoice item amounts and
		 totals.
		 * `PaymentTerms` - Terms by which the invoice payment is due. It is
		 one of the following values:
		 * DueOnReceipt - Payment is due when the payer receives the invoice.
		 * DueOnDateSpecified - Payment is due on the date specified in the
		 invoice.
		 * Net10 - Payment is due 10 days from the invoice date.
		 * Net15 - Payment is due 15 days from the invoice date.
		 * Net30 - Payment is due 30 days from the invoice date.
		 * Net45 - Payment is due 45 days from the invoice date.
	 */
	$invoice = new InvoiceType($_POST['merchantEmail'], $_POST['payerEmail'], $itemList, $_POST['currencyCode'], $_POST['paymentTerms']);
	
	/*
	 *  ##CreateInvoiceRequest
		 Use the CreateInvoiceRequest message to create a new invoice. The
		 merchant issuing the invoice, and the partner, if any, making the
		 call, must have a PayPal account in good standing.

		 The code for the language in which errors are returned, which must be
		 en_US.
	 */
	$requestEnvelope = new RequestEnvelope("en_US");
	
	/*
	 *  CreateInvoiceRequest which takes mandatory params:
		
		 * `Request Envelope` - Information common to each API operation, such
		 as the language in which an error message is returned.
		 * `Invoice` - Merchant, payer, and invoice information.
	 */
	$createInvoiceRequest = new CreateInvoiceRequest($requestEnvelope, $invoice);

	/*
	 *  ## Creating service wrapper object
		 Creating service wrapper object to make API call and loading
		 Configuration::getAcctAndConfig() returns array that contains credential and config parameters
    */
	$invoiceService = new InvoiceService(Configuration::getAcctAndConfig());
	// required in third party permissioning
	if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
		$cred = new PPSignatureCredential("jb-us-seller_api1.paypal.com", "WX4WTU3S8MY44S7F", "AFcWxV21C7fd0v3bYYYRCpSSRl31A7yDhhsPUU2XhtMoZXsWHFxu-RWy");
	    $cred->setThirdPartyAuthorization(new PPTokenAuthorization($_POST['accessToken'], $_POST['tokenSecret']));
	}
	try {

		/*
		 *  ## Making API call
			 Invoke the appropriate method corresponding to API in service
			 wrapper object
		 */
		if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
			$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest, $cred);
		}
		else{
			$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest);
		}
	} catch (Exception $ex) {
		require_once 'error.php';
		exit;
	}
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $createInvoiceResponse->responseEnvelope->ack ."</div> </td></tr>";
	echo "<tr><td>InvoiceID :</td><td><div id='InvoiceID'>". $createInvoiceResponse->invoiceID ."</div> </td></tr>";
	echo "</table>";
	require 'ShowAllResponse.php';
	echo "<pre>";
	var_dump($createInvoiceResponse);
	echo "</pre>";
} else {
?>
<form method="POST">
<div id="apidetails">The CreateInvoice API operation is used to create a new "Draft" invoice. The call includes merchant and payer information in addition to invoice detail. The response to the call contains a invoice ID and a URL where the invoice can be viewed on a browser.</div>
<div class="params">
<div class="param_name">Merchant Email</div>
<div class="param_value"><input type="text" name="merchantEmail"
	value="platfo_1255077030_biz@gmail.com" size="50" maxlength="260" /></div>
<div class="param_name">Payer Email</div>
<div class="param_value"><input type="text" name="payerEmail"
	value="sender@yahoo.com" size="50" maxlength="260" /></div>
<div class="param_name">Item1 Name</div>
<div class="param_value"><input type="text" name="item_name1"
	value="item1" size="30" maxlength="30" /></div>
<div class="param_name">Item1 Quantity</div>
<div class="param_value"><input type="text" name="item_quantity1"
	value="1" size="3" maxlength="5" /></div>
<div class="param_name">Item1 UnitPrice</div>
<div class="param_value"><input type="text" name="item_unitPrice1"
	value="1.00" size="10" maxlength="19" /></div>
<div class="param_name">Item2 Name</div>
<div class="param_value"><input type="text" name="item_name2"
	value="item2" size="30" maxlength="30" /></div>
<div class="param_name">Item2 Quantity</div>
<div class="param_value"><input type="text" name="item_quantity2"
	value="2" size="3" maxlength="5" /></div>
<div class="param_name">Item2 UnitPrice</div>
<div class="param_value"><input type="text" name="item_unitPrice2"
	value="2.00" size="10" maxlength="19" /></div>
<div class="param_name">Currency Code</div>
<div class="param_value"><input type="text" name="currencyCode"
	value="USD" size="50" maxlength="260" /></div>
<div class="param_name">Payment Terms</div>
<div class="param_value"><input type="text" name="paymentTerms"
	value="DueOnReceipt" size="50" maxlength="260" /></div>
<br>
<?php
include('permissions.php');
?>
<input type="submit" name="CreateBtn" value="Create Invoice" /></div>
</form>

<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>