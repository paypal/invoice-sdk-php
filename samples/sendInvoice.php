<?php
use PayPal\Service\InvoiceService;
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\PT\SendInvoiceRequest;
use PayPal\Auth\PPSignatureCredential;
use PayPal\Auth\PPTokenAuthorization;

require_once('PPBootStrap.php');
session_start();

/*
 *  # SendInvoice API
 Use the SendInvoice API operation to send an invoice to a payer, and notify the payer of the pending invoice.
 This sample code uses Invoice PHP SDK to make API call
 */
?>
<html>
<head>
	<title>PayPal Invoicing - SendInvoice Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
<h2>SendInvoice API Test Page</h2>
<?php

//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile']=$currentFile;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	/*
	 *  ##SendInvoiceRequest
		 Use the SendInvoiceRequest message to send an invoice to a payer, and
		 notify the payer of the pending invoice.
	
		 The code for the language in which errors are returned, which must be
		 en_US.
	 */
	$requestEnvelope = new RequestEnvelope("en_US");
	
	/*
	 * 
		 SendInvoiceRequest which takes mandatory params:
		
		 * `Request Envelope` - Information common to each API operation, such
		 as the language in which an error message is returned.
		 * `Invoice ID` - ID of the invoice to send.
	 */
	$sendInvoiceRequest = new SendInvoiceRequest($requestEnvelope, $_POST['invoiceID']);
	
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
			$sendInvoiceResponse = $invoiceService->SendInvoice($sendInvoiceRequest, $cred);
		}
		else{
			$sendInvoiceResponse = $invoiceService->SendInvoice($sendInvoiceRequest);
		}
	} catch (Exception $ex) {
		require_once 'error.php';
		exit;
	}
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $sendInvoiceResponse->responseEnvelope->ack ."</div> </td></tr>";
	echo "<tr><td>InvoiceID :</td><td><div id='InvoiceID'>". $sendInvoiceResponse->invoiceID ."</div> </td></tr>";
	echo "</table>";
	require 'ShowAllResponse.php';
	echo "<pre>";
	var_dump($sendInvoiceResponse);
	echo "</pre>";
} else {
?>
<form method="POST">
<div id="apidetails">SendInvoice API operation is used to send an invoice to a payer and notify the payer of the pending invoice.</div>
<div class="params">
<div class="param_name">Invoice ID</div>
<div class="param_value"><input type="text" name="invoiceID" value=""
	size="50" maxlength="260" /></div>
</div>
<?php
include('permissions.php');
?>
<input type="submit" name="SendInvoiceBtn" value="Send Invoice" /></form>
<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>