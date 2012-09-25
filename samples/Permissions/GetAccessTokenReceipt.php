<?php

/********************************************
 GetAccessTokenReceipt.php
 Called by GetAccessToken.php
 ********************************************/
$path = '..\..\lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PermissionsService.php');
session_start();


$requestEnvelope = new RequestEnvelope();
$requestEnvelope->errorLanguage = "en_US";
$request = new GetAccessTokenRequest();
$request->requestEnvelope = $requestEnvelope;
$request->token = $_REQUEST['Requesttoken'];
$request->verifier = $_REQUEST['Verifier'];
$permissions = new PermissionsService('Permissions');
try {
	$response = $permissions->GetAccessToken($request);
} catch (Exception $ex) {
	require_once '../error.php';
	exit;
}
/* Display the API response back to the browser.
 If the response from PayPal was a success, display the response parameters'
 If the response was an error, display the errors received using APIError.php.
 */
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	$_SESSION['reshash'] = $response;
	$location = "APIError.php";
	header("Location: $location");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>PayPal Invoicing SDK Samples - Get Access Token Response</title>
	<link rel="stylesheet" type="text/css" href="../sdk.css"/>
</head>

<body>

<div id="request_form">
<center>
<h3>GetAccessToken</h3>
<br />
</center>

<?php
require_once '../ShowAllResponse.php';
?>
<table width="600" align="center">
	<tr>
		<td><a
			href='../<?php echo $_SESSION['curFile'].'?permToken='.$response->token.'&permTokenSecret='.$response->tokenSecret ?>'><b>*
		use the obtained AccessToken in Invoicing APIs </b></a></td>
	</tr>
</table>
</div>

</body>
</html>

