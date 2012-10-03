<?php
 /**
  * Stub objects for Permissions 
  * Auto generated code 
  * 
  */
require_once('PPUtils.php');
/**
 * 
 */
class ErrorData  {

	/**
	 * 
	 * @access public
	 * @var integer
	 */ 
	public $errorId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $domain;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $subdomain;

	/**
	 * 
	 * @access public
	 * @var ErrorSeverity
	 */ 
	public $severity;

	/**
	 * 
	 * @access public
	 * @var ErrorCategory
	 */ 
	public $category;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $message;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $exceptionId;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorParameter
	 */ 
	public $parameter;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'errorId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->errorId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'domain';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->domain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'subdomain';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->subdomain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'severity';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->severity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'category';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->category = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'exceptionId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->exceptionId = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "parameter($i)")) {
					$newPrefix = $prefix . "parameter($i).";
					$this->parameter[$i] = new ErrorParameter();
					$this->parameter[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * 
 */
class ErrorParameter  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $value;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'name';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'value';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->value = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This is the sample message 
 */
class ResponseEnvelope  {

	/**
	 * 
	 * @access public
	 * @var dateTime
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgment code. 
	 * @access public
	 * @var AckCode
	 */ 
	public $ack;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $correlationId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $build;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'timestamp';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->timestamp = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ack';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->ack = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'correlationId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->correlationId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'build';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->build = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
class RequestEnvelope  {

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 * @access public
	 * @var string
	 */ 
	public $errorLanguage;

	/**
	 * Constructor with arguments
	 */
	public function __construct($errorLanguage = NULL) {
		$this->errorLanguage = $errorLanguage;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->errorLanguage != NULL) {
			$str .= $delim .  $prefix . 'errorLanguage=' . urlencode($this->errorLanguage);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * 
 */
class FaultMessage  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Describes the request for permissions over an account.
 * Primary element is "scope", which lists the permissions
 * needed. 
 */
class RequestPermissionsRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * URI of the permissions being requested. 
     * @array
	 * @access public
	 * @var string
	 */ 
	public $scope;

	/**
	 * URL on the client side that will be used to communicate
	 * completion of the user flow. The URL can include query
	 * parameters. 
	 * @access public
	 * @var string
	 */ 
	public $callback;

	/**
	 * Constructor with arguments
	 */
	public function __construct($scope = NULL, $callback = NULL) {
		$this->scope = $scope;
		$this->callback = $callback;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		for($i = 0; $i < count($this->scope); $i++) {
			$str .= $delim .  $prefix . "scope($i)=" .  urlencode($this->scope[$i]);
			$delim = '&';
		}
		if($this->callback != NULL) {
			$str .= $delim .  $prefix . 'callback=' . urlencode($this->callback);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Returns the temporary request token 
 */
class RequestPermissionsResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Temporary token that identifies the request for permissions.
	 * This token cannot be used to access resources on the
	 * account. It can only be used to instruct the user to
	 * authorize the permissions. 
	 * @access public
	 * @var string
	 */ 
	public $token;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'token';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->token = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request use to retrieve a permanent access token. The
 * client can either send the token and verifier, or a subject.
 * 
 */
class GetAccessTokenRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * The temporary request token received from the
	 * RequestPermissions call. 
	 * @access public
	 * @var string
	 */ 
	public $token;

	/**
	 * The verifier code returned to the client after the user
	 * authorization flow completed. 
	 * @access public
	 * @var string
	 */ 
	public $verifier;

	/**
	 * The subject email address used to represent existing 3rd
	 * Party Permissions relationship. This field can be used in
	 * lieu of the token and verifier. 
	 * @access public
	 * @var string
	 */ 
	public $subjectAlias;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->token != NULL) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}
		if($this->verifier != NULL) {
			$str .= $delim .  $prefix . 'verifier=' . urlencode($this->verifier);
			$delim = '&';
		}
		if($this->subjectAlias != NULL) {
			$str .= $delim .  $prefix . 'subjectAlias=' . urlencode($this->subjectAlias);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Permanent access token and token secret that can be used to
 * make requests for protected resources owned by another
 * account. 
 */
class GetAccessTokenResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Identifier for the permissions approved for this
	 * relationship. 
     * @array
	 * @access public
	 * @var string
	 */ 
	public $scope;

	/**
	 * Permanent access token that identifies the relationship that
	 * the user authorized. 
	 * @access public
	 * @var string
	 */ 
	public $token;

	/**
	 * The token secret/password that will need to be used when
	 * generating the signature. 
	 * @access public
	 * @var string
	 */ 
	public $tokenSecret;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				$mapKeyName = $prefix . "scope($i)";
				if (PPUtils::array_match_key($map, $mapKeyName)) {
					$this->scope[$i] = $map[$mapKeyName];
				} else {
					break;
				}
				$i++;
			}
			$mapKeyName =  $prefix . 'token';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->token = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'tokenSecret';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->tokenSecret = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Request to retrieve the approved list of permissions
 * associated with a token. 
 */
class GetPermissionsRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * The permanent access token to ask about. 
	 * @access public
	 * @var string
	 */ 
	public $token;

	/**
	 * Constructor with arguments
	 */
	public function __construct($token = NULL) {
		$this->token = $token;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->token != NULL) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The list of permissions associated with the token. 
 */
class GetPermissionsResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Identifier for the permissions approved for this
	 * relationship. 
     * @array
	 * @access public
	 * @var string
	 */ 
	public $scope;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				$mapKeyName = $prefix . "scope($i)";
				if (PPUtils::array_match_key($map, $mapKeyName)) {
					$this->scope[$i] = $map[$mapKeyName];
				} else {
					break;
				}
				$i++;
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Request to invalidate an access token and revoke the
 * permissions associated with it. 
 */
class CancelPermissionsRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $token;

	/**
	 * Constructor with arguments
	 */
	public function __construct($token = NULL) {
		$this->token = $token;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->token != NULL) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * 
 */
class CancelPermissionsResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * List of Personal Attributes to be sent as a request. 
 */
class PersonalAttributeList  {

	/**
	 * 
     * @array
	 * @access public
	 * @var PersonalAttribute
	 */ 
	public $attribute;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->attribute); $i++) {
			$str .= $delim .  $prefix . "attribute($i)=" .  urlencode($this->attribute[$i]);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * A property of User Identity data , represented as a
 * Name-value pair with Name being the PersonalAttribute
 * requested and value being the data. 
 */
class PersonalData  {

	/**
	 * 
	 * @access public
	 * @var PersonalAttribute
	 */ 
	public $personalDataKey;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $personalDataValue;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'personalDataKey';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->personalDataKey = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'personalDataValue';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->personalDataValue = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Set of personal data which forms the response of
 * GetPersonalData call. 
 */
class PersonalDataList  {

	/**
	 * 
     * @array
	 * @access public
	 * @var PersonalData
	 */ 
	public $personalData;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "personalData($i)")) {
					$newPrefix = $prefix . "personalData($i).";
					$this->personalData[$i] = new PersonalData();
					$this->personalData[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Request to retrieve basic personal data.Accepts
 * PersonalAttributeList as request and responds with
 * PersonalDataList. This call will accept only 'Basic'
 * attributes and ignore others. 
 */
class GetBasicPersonalDataRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 * @var PersonalAttributeList
	 */ 
	public $attributeList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($attributeList = NULL) {
		$this->attributeList = $attributeList;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->attributeList != NULL) {
			$newPrefix = $prefix . 'attributeList.';
			$str .= $delim . call_user_func(array($this->attributeList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Request to retrieve personal data.Accepts
 * PersonalAttributeList as request and responds with
 * PersonalDataList. This call will accept both 'Basic' and
 * Advanced attributes. 
 */
class GetAdvancedPersonalDataRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 * @var PersonalAttributeList
	 */ 
	public $attributeList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($attributeList = NULL) {
		$this->attributeList = $attributeList;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->attributeList != NULL) {
			$newPrefix = $prefix . 'attributeList.';
			$str .= $delim . call_user_func(array($this->attributeList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * 
 */
class GetBasicPersonalDataResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 * @var PersonalDataList
	 */ 
	public $response;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "response.")) {
				$newPrefix = $prefix . "response.";
				$this->response = new PersonalDataList();
				$this->response->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * 
 */
class GetAdvancedPersonalDataResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 * @var PersonalDataList
	 */ 
	public $response;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "response.")) {
				$newPrefix = $prefix . "response.";
				$this->response = new PersonalDataList();
				$this->response->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 




?>