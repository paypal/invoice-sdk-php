<?php
 /**
 * Stub objects for Permissions 
 * Auto generated code 
 * 
 */
/**
 * ErrorData
 */
class ErrorData {
	/**
	 * @access public
	 * @var long
	 */
	public $errorId;

	/**
	 * @access public
	 * @var string
	 */
	public $domain;

	/**
	 * @access public
	 * @var string
	 */
	public $subdomain;

	/**
	 * @access public
	 * @var ErrorSeverity
	 */
	public $severity;

	/**
	 * @access public
	 * @var ErrorCategory
	 */
	public $category;

	/**
	 * @access public
	 * @var string
	 */
	public $message;

	/**
	 * @access public
	 * @var string
	 */
	public $exceptionId;

	/**
	 * array
	 * @access public
	 * @var ErrorParameter
	 */
	public $parameter;


	public function init($map = null, $prefix='') {
		if($map != null) {
			$mapKeyName =  $prefix . 'errorId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->errorId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'domain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->domain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'subdomain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->subdomain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'severity';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->severity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'category';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->category = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'exceptionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->exceptionId = $map[$mapKeyName];
			}
			for($i=0; $i<10;$i++) {
				if( PPUtils::array_match_key($map, $prefix."parameter($i)") ) {
					$newPrefix = $prefix."parameter($i).";
				$this->parameter[$i] = new ErrorParameter();
				$this->parameter[$i]->init($map, $newPrefix);
			}
			 }
		}
	}
}

/**
 * ErrorParameter
 */
class ErrorParameter {
	/**
	 * @access public
	 * @var string
	 */
	public $value;

	/**
	 * @access public
	 * @var string
	 */
	public $name;


	public function init($map = null, $prefix='') {
		if($map != null) {
			$mapKeyName =  $prefix . 'value';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->value = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'name';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
		}
	}
}

/**
 * ResponseEnvelope
 * This is the sample message
 */
class ResponseEnvelope {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $timestamp;

	/**
	 * Application level acknowledgment code.
	 *
	 * @access public
	 * @var AckCode
	 */
	public $ack;

	/**
	 * @access public
	 * @var string
	 */
	public $correlationId;

	/**
	 * @access public
	 * @var string
	 */
	public $build;


	public function init($map = null, $prefix='') {
		if($map != null) {
			$mapKeyName =  $prefix . 'timestamp';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->timestamp = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ack';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->ack = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'correlationId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->correlationId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'build';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->build = $map[$mapKeyName];
			}
		}
	}
}

/**
 * RequestEnvelope
 * This specifies the list of parameters with every
 * request to the service.
 */
class RequestEnvelope {
	/**
	 * This should be the standard RFC 3066
	 * language identification tag, e.g.,
	 * en_US.
	 *
	 * @access public
	 * @var string
	 */
	public $errorLanguage;


	public function __construct($errorLanguage = null) {
		$this->errorLanguage  = $errorLanguage;
	}

	public function toNVPString($prefix='') { 
		$str = '';
		$delim = '';
		if( $this->errorLanguage != null ) {
			$str .= $delim .  $prefix . 'errorLanguage=' . urlencode($this->errorLanguage);
			$delim = '&';
		}

		return $str;
	}

}

/**
 * FaultMessage
 */
class FaultMessage {
	/**
	 * @access public
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * array
	 * @access public
	 * @var ErrorData
	 */
	public $error;


	public function init($map = null, $prefix='') {
		if($map != null) {
			if( PPUtils::array_match_key($map, $prefix."responseEnvelope.") ) {
				$newPrefix = $prefix ."responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			for($i=0; $i<10;$i++) {
				if( PPUtils::array_match_key($map, $prefix."error($i)") ) {
					$newPrefix = $prefix."error($i).";
				$this->error[$i] = new ErrorData();
				$this->error[$i]->init($map, $newPrefix);
			}
			 }
		}
	}
}

/**
 * RequestPermissionsRequest
 * Describes the request for permissions over an
 * account. Primary element is "scope", which lists
 * the permissions needed.
 */
class RequestPermissionsRequest {
	/**
	 * @access public
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * URI of the permissions being requested.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $scope;

	/**
	 * URL on the client side that will be used
	 * to communicate completion of the user
	 * flow. The URL can include query
	 * parameters.
	 *
	 * @access public
	 * @var string
	 */
	public $callback;


	public function __construct($scope = null, $callback = null) {
		$this->scope  = $scope;
		$this->callback  = $callback;
	}

	public function toNVPString($prefix='') { 
		$str = '';
		$delim = '';
		if( $this->requestEnvelope != null ) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		for($i=0; $i<count($this->scope);$i++) {
			$str .= $delim .  $prefix ."scope($i)=" .  urlencode($this->scope[$i]);
		 }
		if( $this->callback != null ) {
			$str .= $delim .  $prefix . 'callback=' . urlencode($this->callback);
			$delim = '&';
		}

		return $str;
	}

}

/**
 * RequestPermissionsResponse
 * Returns the temporary request token
 */
class RequestPermissionsResponse {
	/**
	 * @access public
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * Temporary token that identifies the
	 * request for permissions. This token
	 * cannot be used to access resources on
	 * the account. It can only be used to
	 * instruct the user to authorize the
	 * permissions.
	 *
	 * @access public
	 * @var string
	 */
	public $token;

	/**
	 * array
	 * @access public
	 * @var ErrorData
	 */
	public $error;


	public function init($map = null, $prefix='') {
		if($map != null) {
			if( PPUtils::array_match_key($map, $prefix."responseEnvelope.") ) {
				$newPrefix = $prefix ."responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'token';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->token = $map[$mapKeyName];
			}
			for($i=0; $i<10;$i++) {
				if( PPUtils::array_match_key($map, $prefix."error($i)") ) {
					$newPrefix = $prefix."error($i).";
				$this->error[$i] = new ErrorData();
				$this->error[$i]->init($map, $newPrefix);
			}
			 }
		}
	}
}

/**
 * GetAccessTokenRequest
 * The request use to retrieve a permanent access
 * token. The client can either send the token and
 * verifier, or a subject.
 */
class GetAccessTokenRequest {
	/**
	 * @access public
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * The temporary request token received
	 * from the RequestPermissions call.
	 *
	 * @access public
	 * @var string
	 */
	public $token;

	/**
	 * The verifier code returned to the client
	 * after the user authorization flow
	 * completed.
	 *
	 * @access public
	 * @var string
	 */
	public $verifier;

	/**
	 * The subject email address used to
	 * represent existing 3rd Party Permissions
	 * relationship. This field can be used in
	 * lieu of the token and verifier.
	 *
	 * @access public
	 * @var string
	 */
	public $subjectAlias;


	public function toNVPString($prefix='') { 
		$str = '';
		$delim = '';
		if( $this->requestEnvelope != null ) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if( $this->token != null ) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}
		if( $this->verifier != null ) {
			$str .= $delim .  $prefix . 'verifier=' . urlencode($this->verifier);
			$delim = '&';
		}
		if( $this->subjectAlias != null ) {
			$str .= $delim .  $prefix . 'subjectAlias=' . urlencode($this->subjectAlias);
			$delim = '&';
		}

		return $str;
	}

}

/**
 * GetAccessTokenResponse
 * Permanent access token and token secret that can
 * be used to make requests for protected resources
 * owned by another account.
 */
class GetAccessTokenResponse {
	/**
	 * @access public
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * Identifier for the permissions approved
	 * for this relationship.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $scope;

	/**
	 * Permanent access token that identifies
	 * the relationship that the user
	 * authorized.
	 *
	 * @access public
	 * @var string
	 */
	public $token;

	/**
	 * The token secret/password that will need
	 * to be used when generating the
	 * signature.
	 *
	 * @access public
	 * @var string
	 */
	public $tokenSecret;

	/**
	 * array
	 * @access public
	 * @var ErrorData
	 */
	public $error;


	public function init($map = null, $prefix='') {
		if($map != null) {
			if( PPUtils::array_match_key($map, $prefix."responseEnvelope.") ) {
				$newPrefix = $prefix ."responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			for($i=0; $i<10;$i++) {
			 }
			$mapKeyName =  $prefix . 'token';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->token = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'tokenSecret';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->tokenSecret = $map[$mapKeyName];
			}
			for($i=0; $i<10;$i++) {
				if( PPUtils::array_match_key($map, $prefix."error($i)") ) {
					$newPrefix = $prefix."error($i).";
				$this->error[$i] = new ErrorData();
				$this->error[$i]->init($map, $newPrefix);
			}
			 }
		}
	}
}

/**
 * GetPermissionsRequest
 * Request to retrieve the approved list of
 * permissions associated with a token.
 */
class GetPermissionsRequest {
	/**
	 * @access public
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * The permanent access token to ask about.
	 *
	 * @access public
	 * @var string
	 */
	public $token;


	public function __construct($token = null) {
		$this->token  = $token;
	}

	public function toNVPString($prefix='') { 
		$str = '';
		$delim = '';
		if( $this->requestEnvelope != null ) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if( $this->token != null ) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}

		return $str;
	}

}

/**
 * GetPermissionsResponse
 * The list of permissions associated with the
 * token.
 */
class GetPermissionsResponse {
	/**
	 * @access public
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * Identifier for the permissions approved
	 * for this relationship.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $scope;

	/**
	 * array
	 * @access public
	 * @var ErrorData
	 */
	public $error;


	public function init($map = null, $prefix='') {
		if($map != null) {
			if( PPUtils::array_match_key($map, $prefix."responseEnvelope.") ) {
				$newPrefix = $prefix ."responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			for($i=0; $i<10;$i++) {
			 }
			for($i=0; $i<10;$i++) {
				if( PPUtils::array_match_key($map, $prefix."error($i)") ) {
					$newPrefix = $prefix."error($i).";
				$this->error[$i] = new ErrorData();
				$this->error[$i]->init($map, $newPrefix);
			}
			 }
		}
	}
}

/**
 * CancelPermissionsRequest
 * Request to invalidate an access token and revoke
 * the permissions associated with it.
 */
class CancelPermissionsRequest {
	/**
	 * @access public
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @access public
	 * @var string
	 */
	public $token;


	public function __construct($token = null) {
		$this->token  = $token;
	}

	public function toNVPString($prefix='') { 
		$str = '';
		$delim = '';
		if( $this->requestEnvelope != null ) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if( $this->token != null ) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}

		return $str;
	}

}

/**
 * CancelPermissionsResponse
 */
class CancelPermissionsResponse {
	/**
	 * @access public
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * array
	 * @access public
	 * @var ErrorData
	 */
	public $error;


	public function init($map = null, $prefix='') {
		if($map != null) {
			if( PPUtils::array_match_key($map, $prefix."responseEnvelope.") ) {
				$newPrefix = $prefix ."responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			for($i=0; $i<10;$i++) {
				if( PPUtils::array_match_key($map, $prefix."error($i)") ) {
					$newPrefix = $prefix."error($i).";
				$this->error[$i] = new ErrorData();
				$this->error[$i]->init($map, $newPrefix);
			}
			 }
		}
	}
}

?>