# PayPal PHP Invoice SDK


## Prerequisites


PayPal's PHP Invoicing SDK requires 

   * PHP 5.3 and above 
   * curl/openssl PHP extensions 
  
## Running the sample

To run the bundled sample, first copy the samples folder to your web server root. You will then need to install the SDK as a dependency using either composer (PHP V5.3+ only).


run `composer update` from the samples folder.

## Using the SDK


To use the SDK,

   * Create a composer.json file with the following contents.
```json
{
    "name": "me/shopping-cart-app",
    "require": {
        "paypal/invoice-sdk-php":"v3.6.106"
    }
}
```

   * Install the SDK as a dependency using composer or the install.php script. 
   * Require `vendor/autoload.php` OR `PPBootStrap.php` in your application depending on whether you used composer or the custom installer.
   * Choose how you would like to configure the SDK - You can either
	  * Create a hashmap containing configuration parameters and pass it to the service object OR
      * Create a `sdk_config.ini` file and set the PP_CONFIG_PATH constant to point to the directory where this file exists.
   * Instantiate a service wrapper object and a request object as per your project's needs.
   * Invoke the appropriate method on the service object.
  

For example,

```php
	// Sets config file path(if config file is used) and registers the classloader
    require("PPBootStrap.php");
	
	// Array containing credentials and confiuration parameters. (not required if config file is used)
	$config = array(
       'mode' => 'sandbox',
       'acct1.UserName' => 'jb-us-seller_api1.paypal.com',
       'acct1.Password' => 'WX4WTU3S8MY44S7F'
       .....
    );

  	$invoice = new InvoiceType($merchantEmail, $payerEmail, $itemList, $currencyCode, $paymentTerms);
	$requestEnvelope = new RequestEnvelope("en_US");
	$createInvoiceRequest = new CreateInvoiceRequest($requestEnvelope, $invoice);
	......

	$invoiceService = new InvoiceService($config);
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest);
		
	if($strtoupper($createInvoiceResponse->responseEnvelope->ack == 'SUCCESS') {
		// Success
	}
```

## Authentication
  
The SDK provides multiple ways to authenticate your API call.
```php
	$invoiceService = new InvoiceService($config);
	
	// Use the default account (the first account) configured in sdk_config.ini
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest);	

	// Use a specific account configured in sdk_config.ini
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest, 'jb-us-seller_api1.paypal.com');	
	 
	// Pass in a dynamically created API credential object
	$cred = new PPCertificateCredential("username", "password", "path-to-pem-file");
	$cred->setThirdPartyAuthorization(new PPTokenAuthorization("accessToken", "tokenSecret"));
	$createInvoiceResponse = $invoiceService->CreateInvoice($createInvoiceRequest, $cred);	
```
 
## SDK Configuration

The SDK allows you to configure the following parameters

   * Integration mode (sandbox / live)
   * (Multiple) API account credentials.
   * HTTP connection parameters
   * Logging 

Dynamic configuration values can be set by passing a map of credential and config values (if config map is passed the config file is ignored)
```php
    $config = array(
       'mode' => 'sandbox',
       'acct1.UserName' => 'jb-us-seller_api1.paypal.com',
       'acct1.Password' => 'WX4WTU3S8MY44S7F'
       .....
    );
    $service  = new InvoiceService($config);
```
Alternatively, you can configure the SDK via the sdk_config.ini file. 
  
```php
    define('PP_CONFIG_PATH', '/directory/that/contains/sdk_config.ini');
    $service  = new InvoiceService();
```

You can refer full list of configuration parameters in [wiki](https://github.com/paypal/sdk-core-php/wiki/Configuring-the-SDK) page.

## Links

   * API Reference - https://developer.paypal.com/webapps/developer/docs/classic/api/#invoicing
   * If you need help using the SDK, a new feature that you need or have a issue to report, please visit https://github.com/paypal/invoice-sdk-php/issues 
