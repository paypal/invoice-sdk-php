<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>PayPal Invoicing SDK Samples - Request Permissions</title>
	<link rel="stylesheet" type="text/css" href="../sdk.css"/>
</head>
<body>
<div id="request_form">

<form name="Form1" id="Form1" method="post"
	action="RequestPermissionsReceipt.php">
<center><h3>Permissions - Request Permissions</h3></center>
<div class="overview">Step 1) Invoke the RequestPermissions API with the required permission scope.</div>
<table align="center">
	<tr>
		<td class="thinfield" width="120"><a href="">Scope:</a>
		<div id="Scope"
			style="display: none; position: absolute; border-style: solid; background-color: white; padding: 20px;">
		</div>
		</td>
		<td align="left">
		<input type="checkbox" name="chkScope[]" value='INVOICING' checked="checked"/> <b>INVOICING</b> <br />
		<input type="checkbox" name="chkScope[]" value='EXPRESS_CHECKOUT' /> EXPRESS_CHECKOUT <br />
		<input type="checkbox" name="chkScope[]" value='DIRECT_PAYMENT' /> DIRECT_PAYMENT <br />
		<input type="checkbox" name="chkScope[]" value='AUTH_CAPTURE' /> AUTH_CAPTURE <br />
		<input type="checkbox" name="chkScope[]" value='AIR_TRAVEL' /> AIR_TRAVEL <br />
		<input type="checkbox" name="chkScope[]" value='TRANSACTION_SEARCH' /> TRANSACTION_SEARCH <br />
		<input type="checkbox" name="chkScope[]" value='RECURRING_PAYMENTS' /> RECURRING_PAYMENTS <br />
		<input type="checkbox" name="chkScope[]" value='ACCOUNT_BALANCE' />	ACCOUNT_BALANCE <br />
		<input type="checkbox" name="chkScope[]" value='ENCRYPTED_WEBSITE_PAYMENTS' /> ENCRYPTED_WEBSITE_PAYMENTS <br />
		<input type="checkbox" name="chkScope[]" value='REFUND' /> REFUND <br />
		<input type="checkbox" name="chkScope[]" value='BILLING_AGREEMENT' /> BILLING_AGREEMENT <br />
		<input type="checkbox" name="chkScope[]" value='REFERENCE_TRANSACTION' /> REFERENCE_TRANSACTION <br />
		<input type="checkbox" name="chkScope[]" value='MASS_PAY' /> MASS_PAY <br />
		<input type="checkbox" name="chkScope[]" value='TRANSACTION_DETAILS' /> TRANSACTION_DETAILS <br />
		<input type="checkbox" name="chkScope[]" value='NON_REFERENCED_CREDIT' /> NON_REFERENCED_CREDIT <br />
		<input type="checkbox" name="chkScope[]" value='SETTLEMENT_CONSOLIDATION' /> SETTLEMENT_CONSOLIDATION <br />
		<input type="checkbox" name="chkScope[]" value='SETTLEMENT_REPORTING' /> SETTLEMENT_REPORTING <br />
		<input type="checkbox" name="chkScope[]" value='BUTTON_MANAGER' /> BUTTON_MANAGER <br />
		<input type="checkbox" name="chkScope[]" value='MANAGE_PENDING_TRANSACTION_STATUS' /> MANAGE_PENDING_TRANSACTION_STATUS <br />
		<input type="checkbox" name="chkScope[]" value='RECURRING_PAYMENT_REPORT' /> RECURRING_PAYMENT_REPORT <br />
		<input type="checkbox" name="chkScope[]" value='EXTENDED_PRO_PROCESSING_REPORT' /> EXTENDED_PRO_PROCESSING_REPORT <br />
		<input type="checkbox" name="chkScope[]" value='EXCEPTION_PROCESSING_REPORT' /> EXCEPTION_PROCESSING_REPORT <br />
		<input type="checkbox" name="chkScope[]" value='ACCOUNT_MANAGEMENT_PERMISSION' /> ACCOUNT_MANAGEMENT_PERMISSION <br />
		</td>
	</tr>
	<tr align="center">
		<td colspan="2"><br />
		<input type="submit" name="Submit" value="submit" /></td>
	</tr>

</table>
</form>
</div>

</body>
</html>
