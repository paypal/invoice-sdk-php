<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/Invoice/InvoiceService.php');
require_once('PPLoggingManager.php');
session_start();


$logger = new PPLoggingManager('SearchInvoices');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// send request
	$requestEnvelope = new RequestEnvelope();
	$requestEnvelope->errorLanguage = "en_US";
	$merchantEmail= $_POST['merchantEmail'];
	$page = $_POST['pageNumber'];
	$pageSize = $_POST['pageSize'];
	$parameters = new SearchParametersType();
	$parameters->companyName = $_POST['companyName'];
	$parameters->currencyCode = $_POST['currencyCode'];
	$searchInvoicesRequest = new SearchInvoicesRequest($requestEnvelope, $merchantEmail, $parameters, $page, $pageSize);
	$logger->error("created GsearchInvoices Object");
	
	$invoice_service = new InvoiceService();
	// required in third party permissioning
if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null))
	{
		$invoice_service->setAccessToken($_POST['accessToken']);
		$invoice_service->setTokenSecret($_POST['tokenSecret']);
	}
	$searchInvoicesResponse = $invoice_service->SearchInvoices($searchInvoicesRequest);
	$logger->error("Received searchInvoices Response");
	var_dump($searchInvoicesResponse);
} else {

	?>
<html>
<head>
<title>SearchInvoices Sample API Page</title>
</head>
<body>
<h2>SearchInvoices API Test Page</h2>
<form method="POST">
<div class="params">
<div class="param_name">Merchant Email</div>
<div class="param_value"><input type="text" name="merchantEmail" value="jb-us-seller@paypal.com"
	size="50" maxlength="260" /></div>

<br>
<div class="param_name">Page Number</div>
<div class="param_value"><input type="text" name="pageNumber"
	value="1" size="50" maxlength="260" /></div>
<div class="param_name">pageSize</div>
<div class="param_value"><input type="text" name="pageSize"
	value="2" size="50" maxlength="260" /></div>
	<div class="param_name">Company Name</div>
<div class="param_value"><input type="text" name="companyName"
	value="PayPal" size="50" maxlength="260" /></div>
<div class="param_name">Currency Code</div>
<div class="param_value"><input type="text" name="currencyCode"
	value="USD" size="50" maxlength="260" /></div>
</div>
below fields are required only if third party permissioning is used<br>
---------------------------------------------------------------------------------------------<br>
Using Permission Credentials <br>
<a href="Permissions/RequestPermissions.php">(Get AccessToken and TokenSecret here)</a><br />
<div class="param_name">Access Token</div>

<div class="param_value"><input type="text" name="accessToken"
	value="<?php if(isset($_GET['permToken']))echo$_GET['permToken']?>"
	size="50" maxlength="260" /></div>
<div class="param_name">Token Secret</div>
<div class="param_value"><input type="text" name="tokenSecret" id="auth"
	value="<?php if(isset($_GET['permTokenSecret'])) echo $_GET['permTokenSecret']?>"
	size="50" maxlength="260" /></div>
<input type="submit" name="SearchInvoiceBtn" value="Search Invoice" /></form>
<a href="index.php" >Home</a>
</body>
</html>
	<?php
}
?>
