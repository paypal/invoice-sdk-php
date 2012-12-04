
PayPal PHP Invoice SDK
======================


This is a "Work in progress" SDK. If you are looking for a Invoice SDK, please see 

https://www.x.com/developers/paypal/documentation-tools/paypal-sdk-index#invoicingnew

  OR 

https://github.com/paypal/SDKs/tree/master/Invoicing/invoicing-php-sdk




Prerequisites
-------------

PayPal's PHP Invoicing SDK requires 

   * PHP 5.2 and above with curl/openssl extensions enabled
  

Using the SDK
-------------

To use the SDK, 

   * Copy the config and lib folders into your project. . Modify the config file sdk_config.ini to suit your needs.
   * Make sure that the lib folder in your project is available in PHP's include path
   * Include the services/Invoice/InvoiceService.php file in your code.
   * Create a service wrapper object.
   * Create a request object as per your project's needs. All the API request and response 
     classes are available in services/Invoice/InvoiceService.php
   * Invoke the appropriate method on the service object.

For example,

	require_once('services/Invoice/InvoiceService.php');

  	$invoice = new InvoiceType($merchantEmail, $payerEmail, $itemList, $currencyCode, $paymentTerms);
	$requestEnvelope = new RequestEnvelope("en_US");
	$createInvoiceRequest = new CreateInvoiceRequest($requestEnvelope, $invoice);
	......

	$invoiceService = new InvoiceService();
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest);
		
	$ack = strtoupper($createInvoiceResponse->responseEnvelope->ack); 
	if($ack == 'SUCCESS') {
		// Success
	}
  
  
The SDK provides multiple ways to authenticate your API call.

	$invoiceService = new InvoiceService();
	
	// Use the default account (the first account) configured in sdk_config.ini
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest);	

	// Use a specific account configured in sdk_config.inig
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest, 'jb-us-seller_api1.paypal.com');	
	 
	// Pass in a dynamically created API credential object
    $cred = new PPCertificateCredential("username", "password", "path-to-pem-file");
    $cred->setThirdPartyAuthorization(new PPTokenAuthorization("accessToken", "tokenSecret"));
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest, $cred);	
  
 
SDK Configuration
-----------------

Replace the API credential in config/sdk_config.ini . You can use the configuration file to configure

   * (Multiple) API account credentials.
   * Service endpoint and other HTTP connection parameters
   * Logging 

Please refer to the sample config file provided with this bundle.



Getting help
------------

If you need help using the SDK, a new feature that you need or have a issue to report, please visit

   https://www.x.com/developers/paypal/forums/invoicing
   
     OR
   
   https://github.com/paypal/invoice-sdk-php/issues 
