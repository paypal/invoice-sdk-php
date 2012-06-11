<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('PPUtils.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>PayPal Invoicing SDK Samples Home</title>
  <link rel="stylesheet" type="text/css" href="sdk.css"/>
</head>

<body>
	<br/>
    <center>
	  <h4>PayPal Invoicing SDK Samples Home</h4>
	  <h5>SDK v<?php echo PPUtils::SDK_VERSION; ?></h5>
    </center>

    <table align="center">
      <tr>
		  <td><a href="createInvoice.php">CreateInvoice</a></td>
      </tr>
      <tr>
        <td><a href="sendInvoice.php">SendInvoice</a></td>
      </tr>
	  <tr>
        <td><a href="createAndSendInvoice.php">CreateAndSendInvoice</a></td>
      </tr>
      <tr>
        <td><a href="updateInvoice.php">UpdateInvoice</a></td>
      </tr>
	  <tr>
		  <td><a href="getInvoiceDetails.php">GetInvoiceDetails</a></td>
      </tr>
      <tr>
        <td><a href="cancelInvoice.php">CancelInvoice</a></td>
      </tr>
	  <tr>
		  <td><a href="searchInvoice.php">SearchInvoices</a></td>
      </tr>
      <tr>
        <td><a href="markInvoiceAsPaid.php">MarkInvoiceAsPaid</a></td>
      </tr>
      <tr>
        <td><a href="markInvoiceAsUnpaid.php">MarkInvoiceAsUnpaid</a></td>
      </tr>
      <tr>
        <td><a href="markInvoiceAsRefunded.php">MarkInvoiceAsRefunded</a></td>
      </tr>
    </table>
</body>
</html>
