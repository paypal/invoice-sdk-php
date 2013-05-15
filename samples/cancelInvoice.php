<?php
use PayPal\Service\InvoiceService;
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\PT\CancelInvoiceRequest;
require_once('PPBootStrap.php');
session_start();
?>
<html>
<head>
	<title>PayPal Invoicing - CancelInvoice Sample API Page</title>
	<link rel="stylesheet" type="text/css" href="sdk.css"/>
	<script type="text/javascript" src="sdk.js"></script>
</head>
<body>
<h2>CancelInvoice API Test Page</h2>
<?php

/*
 * Use the CancelInvoice API operation to cancel an invoice. 
 */
//get the current filename
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
$_SESSION['curFile'] = $currentFile;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// create request object
	/*
	 * (Required) RFC 3066 language in which error messages are returned; by default it is en_US, which is the only language currently supported. 
	 */
	$requestEnvelope = new RequestEnvelope("en_US");
	$cancelInvoiceRequest = new CancelInvoiceRequest($requestEnvelope);
	/*
	 * (Optional) ID of the invoice. 
	 */
	$cancelInvoiceRequest->invoiceID = $_POST['invoiceID'];
	/*
	 * 	 ## Creating service wrapper object
	Creating service wrapper object to make API call and loading
	configuration file for your credentials and endpoint
	*/
	$invoiceService = new InvoiceService();
	// required in third party permissioning
	if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
		$invoiceService->setAccessToken($_POST['accessToken']);
		$invoiceService->setTokenSecret($_POST['tokenSecret']);
	}
	try {
		/* wrap API method calls on the service object with a try catch */
		
		$cancelInvoiceResponse = $invoiceService->CancelInvoice($cancelInvoiceRequest);
	} catch (Exception $ex) {
		require_once 'error.php';
		exit;
	}		

	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $cancelInvoiceResponse->responseEnvelope->ack ."</div> </td></tr>";
	echo "<tr><td>InvoiceID :</td><td><div id='InvoiceID'>". $cancelInvoiceResponse->invoiceID ."</div> </td></tr>";
	echo "</table>";
	require 'ShowAllResponse.php';
	echo "<pre>";
	var_dump($cancelInvoiceResponse);
	echo "</pre>";
} else {
?>
<form method="POST">
<div id="apidetails">The CancelInvoice API operation is used to cancel an invoice.</div>
<div class="params">
<div class="param_name">Invoice ID</div>
<div class="param_value"><input type="text" name="invoiceID" value=""
	size="50" maxlength="260" /></div>
</div>
<?php
include('permissions.php');
?>
<input type="submit" name="CancelInvoiceBtn" value="Cancel Invoice" /></form>
<?php
}
?>
<br/><br/><a href="index.php" >Home</a>
</body>
</html>