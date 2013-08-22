<?php
/********************************************
 GetAccessToken.php
 Calls  GetAccessTokenReceipt.php,and APIError.php.
 ********************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>PayPal Invoicing SDK Samples - Get Access Token</title>
	<link rel="stylesheet" type="text/css" href="../sdk.css"/>
</head>
<body>
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">

	<center><h3>Permissions - Get Access Token</h3></center>
	<form action="GetAccessTokenReceipt.php" method="post">
	<div class="overview">Step 3) Invoke the GetAccessToken API to obtain a token and token secret that represents the granted third party permissions. The access token and secret returned by this API must be stored securely for future use.</div>

	<table align="center">
	<tr><td>
	Verifier<input type="text" name="Verifier" size="50"
		value="<?php if(isset($_REQUEST['verification_code'])) echo $_REQUEST['verification_code']?>" /><br></br>
		</td></tr>
	<tr><td>Request Token<input type="text" name="Requesttoken" size="50"
		value="<?php if(isset($_REQUEST['request_token'])) echo $_REQUEST['request_token']?>" /><br></br></td></tr>
	<tr><td><input type="submit" value="GetAccessToken" /></td></tr>
	</table>
	</form>

</body>
</html>
