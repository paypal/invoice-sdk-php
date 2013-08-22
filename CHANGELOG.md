### CHANGELOG

#### Version 2.5.106 - August 22, 2013
 
	- Updated stubs.
	- Updated samples to showcase dynamic configuration.
	
You can see source code of this release in github under https://github.com/paypal/invoice-sdk-php/tree/v2.5.106.

--------------------------------------------------------------------------------------------------

#### Version 2.4.103 - June 11, 2013
 
	- Updated stubs for 103 release.
	- Removed deprecated methods like setAccessToken, getAccessToken from baseService in core.
    - Added correct thirdparty auth header in core.
	- Updated install script in samples to handle wildcard tag names. 
	- Setting thirdparty credential using credential object in samples
	
You can see source code of this release in github under https://github.com/paypal/invoice-sdk-php/tree/v2.4.103.

--------------------------------------------------------------------------------------------------

#### Version 2.3.100 - March 25, 2013
 
   - Updated stubs for 100 release
   - Added dynamic configuration support by passing configuration parameters using hash map.
	
You can see source code of this release in github under https://github.com/paypal/invoice-sdk-php/tree/v2.3.100.

--------------------------------------------------------------------------------------------------

#### Version 2.2.98 - February 05, 2013
 
   - Added support for composer.
   - Added installation script that fetches the dependencies and installs sdk if composer not present, contributed by: https://github.com/rrehbeindoi.
   - Added loading the static configuration from a different source.
	
You can see source code of this release in github under https://github.com/paypal/invoice-sdk-php/tree/v2.2.98.

--------------------------------------------------------------------------------------------------

#### Version 2.1.96 - December 14, 2012
 
   - Added support for Instant Payment Notification (Refer IPN-README.md for more details)
   - Added new feature for supporting multiple endpoints based on portname for using different sdks together.
	
You can see source code of this release in github under https://github.com/paypal/invoice-sdk-php/tree/v2.1.96.

--------------------------------------------------------------------------------------------------

#### Version 2.0.96 - December 06, 2012
 
   - SDK refreshed to Release 96
   - Application ID is not mandatory now.
   - Added support for passing in credentials dynamically for Authentication, now the call 
     wrappers have an argument for passing credentials
   - New type ThirdPartyAuthorization has been added to support Subject and Token based Authorizations. The earlier
     setAccessToken and setTokenSecret have been deprecated. You can set an instance of ThirdPartyAuthorization to an 
     ICredntial and pass ICredential as a parameter to  API call
   - Fixes to deserialization issues.(https://github.com/paypal/SDKs/issues/37) 
   - Fixes to validating SSL Cert in curl requests.(https://github.com/paypal/SDKs/issues/35) 

--------------------------------------------------------------------------------------------------

#### Version 1.4.95 - September 28, 2012
 
   - Bug fixed for 'PPLoggingManager.php' to pickup configuration entries.(https://github.com/paypal/SDKs/issues/28)
   - SDK sample enhancement and correction

--------------------------------------------------------------------------------------------------

#### Version 1.3.93 - August 13, 2012
 
   - SDK Core - Deserialization Logic Change

--------------------------------------------------------------------------------------------------

#### Version 1.2.92 - July 17, 2012 

   - wsdl update version 92

------------------------------------------

#### Version 1.2.90 - June 11, 2012

   - SDK refresh for new API release. This release contains wrappers for 2 new API methods -
     MarkInvoiceAsUnpaid & MarkInvoiceAsRefunded

------------------------------------------------------------------------------------------------------

#### Version 1.2.88 - April 17, 2012

   - Fix to get SDK working with Permissions API token

------------------------------------------------------------------------------------------------------

#### Version 1.1.88 - April 11, 2012

   - This release contains wsdl update version 88.0

------------------------------------------------------------------------------------------------------

#### Version 1.1.84 - December 28, 2011

   - This release contains samples for the UpdateInvoice, CancelInvoice & MarkInvoiceAsPaid APIs.

------------------------------------------------------------------------------------------------------

#### Version 1.0.84 - September 23, 2011

   - This release contains wrappers for the 5 new invoicing APIs - UpdateInvoice, GetInvoiceDetails,
     CancelInvoice, SearchInvoices & MarkInvoiceAsPaid

------------------------------------------------------------------------------------------------------

#### Version 0.6.82 - May 10, 2011

   - Initial beta release of the invoicing SDK

------------------------------------------------------------------------------------------------------