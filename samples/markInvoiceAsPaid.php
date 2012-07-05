<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
session_start();

?>
<html>
<head>
	<title>MarkInvoiceAsPaid Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
<h2>MarkInvoiceAsPaid API Test Page</h2>
<?php

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;

$logger = new PPLoggingManager('MarkInvoiceAsPaid');
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// create request object
	$requestEnvelope = new RequestEnvelope("en_US");
	$payment = new OtherPaymentDetailsType();
	if($_POST['paymentMethod'] != "")
		$payment->method = $_POST['paymentMethod'];
	if($_POST['note'] != "")
		$payment->note = $_POST['note'];
	if($_POST['paymentDate'] != "")
		$payment->date = $_POST['paymentDate'];
	$markInvoiceAsPaidRequest = new MarkInvoiceAsPaidRequest($requestEnvelope, $_POST['invoiceID'], $payment);
	$logger->info("created MarkInvoiceAsPaid Object");


	$invoiceService = new InvoiceService();
	// required in third party permissioning
	if(($_POST['accessToken'] != null) && ($_POST['tokenSecret'] != null))
	{
		$invoiceService->setAccessToken($_POST['accessToken']);
		$invoiceService->setTokenSecret($_POST['tokenSecret']);
	}

	$markInvoiceAsPaidResponse = $invoiceService->MarkInvoiceAsPaid($markInvoiceAsPaidRequest, 'jb-us-seller_api1.paypal.com');
	$logger->info("Received MarkInvoiceAsPaidResponse:");
	var_dump($markInvoiceAsPaidResponse);
} else {
?>

<form method="POST">
<div id="apidetails">The MarkInvoiceAsPaid API operation is used to mark an invoice as paid.</div>
<div class="params">
	<div class="param_name">Invoice ID *</div>
	<div class="param_value"><input type="text" name="invoiceID" value=""
		size="50" maxlength="260" /></div>
</div>
<div class="section_header">Other Payment Details *</div>
<div class="params">
	<div class="param_name">Payment Method used for offline payment</div>
	<div class="param_value">
		<select name="paymentMethod">
			<option value="BankTransfer">BankTransfer</option>
			<option value="Cash">Cash</option>
			<option value="Check">Check</option>
			<option value="CreditCard">CreditCard</option>
			<option value="DebitCard">DebitCard</option>
			<option value="PayPal">PayPal</option>
			<option value="WireTransfer">WireTransfer</option>
			<option value="Other">Other</option>
		</select>
	</div>
</div>
<div class="params">
	<div class="param_name">Note</div>
	<div class="param_value">
		<input type="text" name="note" value="" />
	</div>
</div>
<div class="params">
	<div class="param_name">Date when the invoice as paid</div>
	<div class="param_value">
		<input type="text" name="paymentDate" value="2011-12-20T02:56:08" />
	</div>
</div>
<?php
include('permissions.php');
?>
<input type="submit" name="MarkInvoiceAsPaidBtn" value="Mark Invoice As Paid" /></form>
<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>