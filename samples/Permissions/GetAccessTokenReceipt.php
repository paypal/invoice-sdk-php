<?php
use PayPal\Service\PermissionsService;
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\Perm\GetAccessTokenRequest;
/********************************************
 GetAccessTokenReceipt.php
 Called by GetAccessToken.php
 Use the GetAccessToken API operation to obtain an access token for a set of permissions. 
 ********************************************/
require_once('../PPBootStrap.php');
session_start();
/*
 * (Required) Information common to each API operation, such as the language in which an error message is returned.
*/
$requestEnvelope = new RequestEnvelope();
$requestEnvelope->errorLanguage = "en_US";
$request = new GetAccessTokenRequest();
$request->requestEnvelope = $requestEnvelope;
/*
 * (Required) The request token from the response to RequestPermissions.
*/
$request->token = $_REQUEST['Requesttoken'];
/*
 * (Required) The verification code returned in the redirect from PayPal to the return URL.
*/
$request->verifier = $_REQUEST['Verifier'];
/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$permissions = new PermissionsService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
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
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">

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

