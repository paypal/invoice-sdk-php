<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
?>
<html>
<head>
	<title>GetInvoiceDetails Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
<h2>GetInvoiceDetails API Test Page</h2>
<?php


$logger = new PPLoggingManager('GetInvoiceDetails');
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// create request object
	$requestEnvelope = new RequestEnvelope("en_US");
	$getInvoiceDetailsRequest = new GetInvoiceDetailsRequest($requestEnvelope, $_POST['invoiceID']);
	$logger->info("created GetInvoiceDetails Object");
	$invoiceService = new InvoiceService();
	// required in third party permissioning
	if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null))
	{
		$invoiceService->setAccessToken($_POST['accessToken']);
		$invoiceService->setTokenSecret($_POST['tokenSecret']);
	}
	$getInvoiceDetailsResponse = $invoiceService->GetInvoiceDetails($getInvoiceDetailsRequest, 'jb-us-seller_api1.paypal.com');
	$logger->info("Received getInvoiceDetailsResponse");
	var_dump($getInvoiceDetailsResponse);
} else {
?>
<form method="POST">
<div id="apidetails">The GetInvoiceDetails API operation is used to get detailed information about an invoice.</div>
<div class="params">
<div class="param_name">Invoice ID *</div>
<div class="param_value"><input type="text" name="invoiceID" value=""
	size="50" maxlength="260" /></div>
</div>
<br/>
<?php
include('permissions.php');
?>
<input type="submit" name="GetInvoiceDetailsBtn" value="Get Invoice Details" /></form>
<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>