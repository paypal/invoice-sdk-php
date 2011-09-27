<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
session_start();

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile']=$currentFile;

$logger = new PPLoggingManager('createInvoiceTest');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// send request

	$item1 = new InvoiceItemType($_POST['item_name1'], $_POST['item_quantity1'], $_POST['item_unitPrice1']);
	$item2 = new InvoiceItemType($_POST['item_name2'], $_POST['item_quantity2'], $_POST['item_unitPrice2']);
	$items = array($item1, $item2);
$itemList = new InvoiceItemListType();
$itemList->item =  $items;
	$invoice = new InvoiceType($_POST['merchantEmail'], $_POST['payerEmail'], $itemList, $_POST['currencyCode'], $_POST['paymentTerms']);
	$requestEnvelope = new RequestEnvelope();
	$requestEnvelope->errorLanguage = "en_US";
	$createInvoiceRequest = new CreateInvoiceRequest($requestEnvelope, $invoice);
	$logger->error("created CreateInvoiceRequest Object");
	$invoice_service = new InvoiceService();
	// required in third party permissioning
	if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null))
	{
		$invoice_service->setAccessToken($_POST['accessToken']);
		$invoice_service->setTokenSecret($_POST['tokenSecret']);
	}

	$createInvoiceResponse = $invoice_service->CreateInvoice($createInvoiceRequest, 'jb-us-seller_api1.paypal.com');
	$logger->error("Received CreateInvoiceResponse:");
	var_dump($createInvoiceResponse);
} else {

	?>
<html>
<head>
<title>CreateInvoice Sample API Page</title>
</head>
<body>
<h2>CreateInvoice API Test Page</h2>
<form method="POST">
<div class="params">
<div class="param_name">Merchant Email</div>
<div class="param_value"><input type="text" name="merchantEmail"
	value="jb-us-seller@paypal.com" size="50" maxlength="260" /></div>
<div class="param_name">Payer Email</div>
<div class="param_value"><input type="text" name="payerEmail"
	value="sender@yahoo.com" size="50" maxlength="260" /></div>
<div class="param_name">Item Name1</div>
<div class="param_value"><input type="text" name="item_name1"
	value="item1" size="30" maxlength="30" /></div>
<div class="param_name">Item Quantity1</div>
<div class="param_value"><input type="text" name="item_quantity1"
	value="1" size="3" maxlength="5" /></div>
<div class="param_name">Item UnitPrice1</div>
<div class="param_value"><input type="text" name="item_unitPrice1"
	value="1.00" size="10" maxlength="19" /></div>
<div class="param_name">Item Name2</div>
<div class="param_value"><input type="text" name="item_name2"
	value="item2" size="30" maxlength="30" /></div>
<div class="param_name">Item Quantity2</div>
<div class="param_value"><input type="text" name="item_quantity2"
	value="2" size="3" maxlength="5" /></div>
<div class="param_name">Item UnitPrice2</div>
<div class="param_value"><input type="text" name="item_unitPrice2"
	value="2.00" size="10" maxlength="19" /></div>
<div class="param_name">Currency Code</div>
<div class="param_value"><input type="text" name="currencyCode"
	value="USD" size="50" maxlength="260" /></div>
<div class="param_name">Payment Terms</div>
<div class="param_value"><input type="text" name="paymentTerms"
	value="DueOnReceipt" size="50" maxlength="260" /></div>
<br>
below fields are required only if third party permissioning is used<br>
---------------------------------------------------------------------------------------------<br>
Using Permission Credentials <br>
<a href="Permissions/RequestPermissions.php">(Get AccessToken and
TokenSecret here)</a><br />
<div class="param_name">Access Token</div>

<div class="param_value"><input type="text" name="accessToken"
	value="<?php if(isset($_GET['permToken']))echo$_GET['permToken']?>"
	size="50" maxlength="260" /></div>
<div class="param_name">Token Secret</div>
<div class="param_value"><input type="text" name="tokenSecret" id="auth"
	value="<?php if(isset($_GET['permTokenSecret'])) echo $_GET['permTokenSecret']?>"
	size="50" maxlength="260" /></div>
<input type="submit" name="CreateBtn" value="CreateInvoice" /></div>
</form>
<a href="index.php" >Home</a>
</body>
</html>
	<?php

}
?>