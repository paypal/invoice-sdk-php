<?php
use PayPal\Service\InvoiceService;
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\PT\MarkInvoiceAsPaidRequest;
use PayPal\Types\PT\OtherPaymentDetailsType;
use PayPal\Auth\PPSignatureCredential;
use PayPal\Auth\PPTokenAuthorization;

require_once('PPBootStrap.php');
session_start();
/*
 * Use the MarkInvoiceAsPaid API operation to mark an invoice as paid. 
 */
?>
<html>
<head>
	<title>PayPal Invoicing - MarkInvoiceAsPaid Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
<h2>MarkInvoiceAsPaid API Test Page</h2>
<?php

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// create request object
	$requestEnvelope = new RequestEnvelope("en_US");
	$payment = new OtherPaymentDetailsType();
	/*
	 * (Optional) Method that can be used to mark an invoice as paid when the payer pays offline. It is one of the following values:

    BankTransfer – Payment is made by a bank transfer.
    Cash – Payment is made in cash.
    Check – Payment is made by check.
    CreditCard – Payment is made by a credit card.
    DebitCard – Payment is made by a debit card.
    Other – Payment is made by a method not specified in this list.
    PayPal – Payment is made by PayPal.
    WireTransfer – Payment is made by a wire transfer.

	 */
	if($_POST['paymentMethod'] != "")
		$payment->method = $_POST['paymentMethod'];
	/*
	 * (Optional) Optional note associated with the payment. 
	 */
	if($_POST['note'] != "")
		$payment->note = $_POST['note'];
	/*
	 * (Required) Date when the invoice was paid. 
	 */
	if($_POST['paymentDate'] != "")
		$payment->date = $_POST['paymentDate'];
	$markInvoiceAsPaidRequest = new MarkInvoiceAsPaidRequest($requestEnvelope, $_POST['invoiceID'], $payment);

	/*
	 * 	 ## Creating service wrapper object
	Creating service wrapper object to make API call and loading
    Configuration::getAcctAndConfig() returns array that contains credential and config parameters
    */
	$invoiceService = new InvoiceService(Configuration::getAcctAndConfig());
	// required in third party permissioning
	if(($_POST['accessToken'] != null) && ($_POST['tokenSecret'] != null)) {
		$cred = new PPSignatureCredential("jb-us-seller_api1.paypal.com", "WX4WTU3S8MY44S7F", "AFcWxV21C7fd0v3bYYYRCpSSRl31A7yDhhsPUU2XhtMoZXsWHFxu-RWy");
	    $cred->setThirdPartyAuthorization(new PPTokenAuthorization($_POST['accessToken'], $_POST['tokenSecret']));
	}
	try {
		if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
			$markInvoiceAsPaidResponse = $invoiceService->MarkInvoiceAsPaid($markInvoiceAsPaidRequest, $cred);
		}
		else{
			$markInvoiceAsPaidResponse = $invoiceService->MarkInvoiceAsPaid($markInvoiceAsPaidRequest);
		}
	} catch (Exception $ex) {
		require_once 'error.php';
		exit;
	}
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $markInvoiceAsPaidResponse->responseEnvelope->ack ."</div> </td></tr>";
	echo "<tr><td>InvoiceID :</td><td><div id='InvoiceID'>". $markInvoiceAsPaidResponse->invoiceID ."</div> </td></tr>";
	echo "</table>";
	require 'ShowAllResponse.php';
	echo "<pre>";
	var_dump($markInvoiceAsPaidResponse);
	echo "</pre>";
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