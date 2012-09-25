<?php

/********************************************
 RequestPermissionsReceipt.php
 Called by RequestPermissions.php
 ********************************************/
$path = '..\..\lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PermissionsService.php');


$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url = dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
$returnURL = $url."/GetAccessToken.php";
$cancelURL = $url. "/RequestPermissions.php" ;


if(isset($_POST['chkScope'])) {
	$i = 0;
	foreach ($_POST['chkScope'] as $value) {
		$scope[$i] = $value;
		$i++;
	}
}
$requestEnvelope = new RequestEnvelope();
$requestEnvelope->errorLanguage = "en_US";
$request = new RequestPermissionsRequest($scope, $returnURL);
$request->requestEnvelope = $requestEnvelope;
$permissions = new PermissionsService('Permissions');
try {
	$response = $permissions->RequestPermissions($request);
} catch (Exception $ex) {
	require_once '../error.php';
	exit;
}
/* Display the API response back to the browser.
 If the response from PayPal was a success, display the response parameters'
 If the response was an error, display the errors received using APIError.php.
 */
$ack = strtoupper($response->responseEnvelope->ack);
session_start();
if($ack != "SUCCESS"){
	$_SESSION['reshash'] = $response;
	$location = "APIError.php";
	header("Location: $location");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>PayPal Invoicing SDK Samples - Request Permissions Response</title>
	<link rel="stylesheet" type="text/css" href="../sdk.css"/>
</head>

<body>
<div class="overview">Step 2) Redirect third party to PayPal so that the user may login and grant permissions to the API caller.</div>
 
<br />
<div id="request_form">

<center>
<h3>RequestPermissions - Response</h3>
</center>
<br />

<?php
require_once '../ShowAllResponse.php';
$token = $response->token;
$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd='.'_grant-permission&request_token='.$token;


?>
<table width="600" align="center">
	<tr>
		<td><a href=<?php echo $payPalURL;?>><b>* Redirect URL to Complete
		RequestPermissions API operation </b></a></td>
	</tr>
</table>


</div>


</body>
</html>
