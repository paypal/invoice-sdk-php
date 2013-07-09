<?php
require_once('PPBootStrap.php');
require_once('Constants.php');
session_start();
/*
 * Use the MarkInvoiceAsRefunded API operation to mark an invoice as refunded. This API operation canonly be used for full refunds. 
 */
?>
<html>
<head>
	<title>PayPal Invoicing - MarkInvoiceAsRefunded Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
<h2>MarkInvoiceAsRefunded API Test Page</h2>
<?php

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// create request object
	/*
	 * (Required) Information common to each API operation, such as the language in which an error message is returned. 
	 */
	$requestEnvelope = new RequestEnvelope("en_US");
	$refundDetails = new OtherPaymentRefundDetailsType();
	if($_POST['note'] != "")
		$refundDetails->note = $_POST['note'];
	if($_POST['refundDate'] != "")
		$refundDetails->date = $_POST['refundDate'];
	$markInvoiceAsRefundedRequest = new MarkInvoiceAsRefundedRequest($requestEnvelope, $_POST['invoiceID'], $refundDetails);

	/*
	     configuration file for your credentials and endpoint
	*/
	$invoiceService = new InvoiceService(Configuration::getSignatureConfig());
	// required in third party permissioning
	if(($_POST['accessToken'] != null) && ($_POST['tokenSecret'] != null)) {
		$cred = new PPSignatureCredential(USERNAME, PASSWORD, SIGNATURE);
	    $cred->setThirdPartyAuthorization(new PPTokenAuthorization($_POST['accessToken'], $_POST['tokenSecret']));
	}

	try {
		if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
			$markInvoiceAsRefundedResponse = $invoiceService->MarkInvoiceAsRefunded($markInvoiceAsRefundedRequest, $cred);
		}
		else{
			$markInvoiceAsRefundedResponse = $invoiceService->MarkInvoiceAsRefunded($markInvoiceAsRefundedRequest);
		}
	} catch (Exception $ex) {
		require_once 'error.php';
		exit;
	}
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $markInvoiceAsRefundedResponse->responseEnvelope->ack ."</div> </td></tr>";
	echo "<tr><td>InvoiceID :</td><td><div id='InvoiceID'>". $markInvoiceAsRefundedResponse->invoiceID ."</div> </td></tr>";
	echo "</table>";
	require 'ShowAllResponse.php';
	echo "<pre>";
	var_dump($markInvoiceAsRefundedResponse);
	echo "</pre>";
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