<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
?>
<html>
<head>
	<title>PayPal Invoicing - GetInvoiceDetails Sample API Page</title>
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
	if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
		$invoiceService->setAccessToken($_POST['accessToken']);
		$invoiceService->setTokenSecret($_POST['tokenSecret']);
	}
	try {
		$getInvoiceDetailsResponse = $invoiceService->GetInvoiceDetails($getInvoiceDetailsRequest);
	} catch (Exception $ex) {
		require_once 'error.php';
		exit;
	}
	$logger->info("Received getInvoiceDetailsResponse");
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $getInvoiceDetailsResponse->responseEnvelope->ack ."</div> </td></tr>";
	echo "</table>";
	require 'ShowAllResponse.php';
	echo "<pre>";
	var_dump($getInvoiceDetailsResponse);
	echo "</pre>";
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