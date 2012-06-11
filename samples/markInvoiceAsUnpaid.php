<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
session_start();

?>
<html>
<head>
	<title>MarkInvoiceAsUnpaid Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
<h2>MarkInvoiceAsUnpaid API Test Page</h2>
<?php

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;

$logger = new PPLoggingManager('MarkInvoiceAsUnpaid');
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// create request object
	$requestEnvelope = new RequestEnvelope("en_US");
	$markInvoiceAsUnpaidRequest = new MarkInvoiceAsUnpaidRequest($requestEnvelope, $_POST['invoiceID']);
	$logger->info("created MarkInvoiceAsUnpaid Object");

	$invoiceService = new InvoiceService();
	// required in third party permissioning
	if(($_POST['accessToken'] != null) && ($_POST['tokenSecret'] != null))
	{
		$invoiceService->setAccessToken($_POST['accessToken']);
		$invoiceService->setTokenSecret($_POST['tokenSecret']);
	}

	$markInvoiceAsUnpaidResponse = $invoiceService->MarkInvoiceAsUnpaid($markInvoiceAsUnpaidRequest, 'jb-us-seller_api1.paypal.com');
	$logger->info("Received MarkInvoiceAsUnpaidResponse:");
	var_dump($markInvoiceAsUnpaidResponse);
} else {
?>

<form method="POST">
<div id="apidetails">The MarkInvoiceAsUnpaid API operation is used to mark an invoice as unpaid.</div>
<div class="params">
	<div class="param_name">Invoice ID *</div>
	<div class="param_value"><input type="text" name="invoiceID" value=""
		size="50" maxlength="260" /></div>
</div>
<?php
include('permissions.php');
?>
<input type="submit" name="MarkInvoiceAsUnpaidBtn" value="Mark Invoice As Unpaid" /></form>
<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>