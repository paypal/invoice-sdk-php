<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
session_start();
?>
<html>
<head>
	<title>UpdateInvoice Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
	<h2>UpdateInvoice API Test Page</h2>
<?php


//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;

$logger = new PPLoggingManager('updateInvoiceTest');
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// send request
	$item1 = new InvoiceItemType($_POST['item_name1'], $_POST['item_quantity1'], $_POST['item_unitPrice1']);
	$item2 = new InvoiceItemType($_POST['item_name2'], $_POST['item_quantity2'], $_POST['item_unitPrice2']);
	$itemList = new InvoiceItemListType();
	$itemList->item = array($item1, $item2);
	$invoice = new InvoiceType($_POST['merchantEmail'], $_POST['payerEmail'], $itemList, $_POST['currencyCode'], $_POST['paymentTerms']);
	$requestEnvelope = new RequestEnvelope("en_US");
	$updateInvoiceRequest = new UpdateInvoiceRequest($requestEnvelope, $_POST['invoiceId'], $invoice);
	$logger->info("created UpdateInvoiceRequest Object");

	$invoiceService = new InvoiceService();
	// required in third party permissioning
	if(($_POST['accessToken'] != null) && ($_POST['tokenSecret'] != null))
	{
		$invoiceService->setAccessToken($_POST['accessToken']);
		$invoiceService->setTokenSecret($_POST['tokenSecret']);
	}

	$updateInvoiceResponse = $invoiceService->UpdateInvoice($updateInvoiceRequest, 'jb-us-seller_api1.paypal.com');
	$logger->info("Received UpdateInvoiceResponse:");
	var_dump($updateInvoiceResponse);
} else {

	?>

<form method="POST">
<div id="apidetails">The UpdateInvoice API operation is used to update an invoice.</div>
<div class="params">
<div class="param_name">Invoice ID *</div>
<div class="param_value"><input type="text" name="invoiceId"/></div>
<div class="param_name">Merchant Email</div>
<div class="param_value"><input type="text" name="merchantEmail"
	value="jb-us-seller@paypal.com" size="50" maxlength="260" /></div>
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
<input type="submit" name="CreateBtn" value="Update Invoice" /></div>
</form>
<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>