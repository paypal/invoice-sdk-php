<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
session_start();

?>
<html>
<head>
	<title>MarkInvoiceAsRefunded Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
<h2>MarkInvoiceAsRefunded API Test Page</h2>
<?php

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;

$logger = new PPLoggingManager('MarkInvoiceAsRefunded');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// create request object
	$requestEnvelope = new RequestEnvelope("en_US");
	$refundDetails = new OtherPaymentRefundDetailsType();
	if($_POST['note'] != "")
		$refundDetails->note = $_POST['note'];
	if($_POST['refundDate'] != "")
		$refundDetails->date = $_POST['refundDate'];
	$markInvoiceAsRefundedRequest = new MarkInvoiceAsRefundedRequest($requestEnvelope, $_POST['invoiceID'], $refundDetails);
	$logger->info("created MarkInvoiceAsRefunded Object");

	$invoiceService = new InvoiceService();
	// required in third party permissioning
	if(($_POST['accessToken'] != null) && ($_POST['tokenSecret'] != null))
	{
		$invoiceService->setAccessToken($_POST['accessToken']);
		$invoiceService->setTokenSecret($_POST['tokenSecret']);
	}

	$markInvoiceAsRefundedResponse = $invoiceService->MarkInvoiceAsRefunded($markInvoiceAsRefundedRequest, 'jb-us-seller_api1.paypal.com');
	$logger->info("Received MarkInvoiceAsRefundedResponse:");
	var_dump($markInvoiceAsRefundedResponse);
} else {
?>

<form method="POST">
<div id="apidetails">The MarkInvoiceAsRefunded API operation is used to mark an invoice as refunded.</div>
<div class="params">
	<div class="param_name">Invoice ID *</div>
	<div class="param_value"><input type="text" name="invoiceID" value=""
		size="50" maxlength="260" /></div>
</div>
<div class="section_header">Other Refund Details *</div>
<div class="params">
	<div class="param_name">Note</div>
	<div class="param_value">
		<input type="text" name="note" value="" />
	</div>
</div>
<div class="params">
	<div class="param_name">Date when the invoice as refunded</div>
	<div class="param_value">
		<input type="text" name="refundDate" value="2011-12-20T02:56:08" />
	</div>
</div>
<?php
include('permissions.php');
?>
<input type="submit" name="MarkInvoiceAsRefundedBtn" value="Mark Invoice As Refunded" /></form>
<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>