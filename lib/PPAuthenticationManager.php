<?php
require_once 'IPPCredential.php';
require_once 'PPConfigManager.php';
require_once 'PPSignatureCredential.php';
require_once 'PPCertificateCredential.php';
require_once 'exceptions/PPInvalidCredentialException.php';
require_once 'auth/PPAuth.php';
class PPAuthenticationManager
{



	public function getPayPalHeaders($apiCred,  $connection,  $accessToken = null, $tokenSecret = null ,$url = null)
	{
		$config = PPConfigManager::getInstance();

		if(isset($accessToken) && isset($tokenSecret))
		{
			$headers_arr[] = "X-PAYPAL-AUTHORIZATION:  " . $this->generateAuthString($apiCred, $accessToken, $tokenSecret, $url);
			//$headers_arr[] = "CLIENT-AUTH: No cert";
		}
		// Add headers required for service authentication
		else if($apiCred instanceof PPSignatureCredential)
		{
			$headers_arr[] = "X-PAYPAL-SECURITY-USERID:  " . $apiCred->getUserName();
			$headers_arr[] = "X-PAYPAL-SECURITY-PASSWORD: " . $apiCred->getPassword();
			$headers_arr[] = "X-PAYPAL-SECURITY-SIGNATURE: " . $apiCred->getSignature();
		}
		else if($apiCred instanceof PPCertificateCredential)
		{

			$headers_arr[] = "X-PAYPAL-SECURITY-USERID:  " . $apiCred->getUserName();
			$headers_arr[] = "X-PAYPAL-SECURITY-PASSWORD: " . $apiCred->getPassword();
			$connection->setSSLCert($apiCred->getCertificatePath());
		}

		// Add other headers
		$headers_arr[] = "X-PAYPAL-APPLICATION-ID: " . $apiCred->getApplicationId();
		$headers_arr[] = "X-PAYPAL-REQUEST-DATA-FORMAT: "  . $config->get('service.Binding');
		$headers_arr[] = "X-PAYPAL-RESPONSE-DATA-FORMAT: "  . $config->get('service.Binding');
		$headers_arr[] = "X-PAYPAL-DEVICE-IPADDRESS: " . PPUtils::getLocalIPAddress();
		$headers_arr[] = "X-PAYPAL-REQUEST-SOURCE: " . PPUtils::getRequestSource();
		return $headers_arr;
	}


	private function generateAuthString($apiCred, $accessToken, $tokenSecret, $endpoint)
	{
		$key = 	$apiCred->getUserName();
		$secret = 	$apiCred->getPassword();
		$auth = new AuthSignature();
		$response = $auth->genSign($key,$secret,$accessToken,$tokenSecret,'POST',$endpoint);
		$authString = "token=".$accessToken.",signature=".$response['oauth_signature'].",timestamp=".$response['oauth_timestamp'];

		return $authString;
	}

}

?>