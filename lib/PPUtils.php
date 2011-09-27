<?php
class PPUtils {
	
	const SDK_VERSION = "0.6";
	const SDK_NAME = "PHP Invoice SDK ";
	
	/**
	 * 
	 * Convert a Name Value Pair (NVP) formatted string into 
	 * an associative array taking care to urldecode array values
	 * 
	 * @param string $nvpString
	 */
	public static function nvpToMap($nvpString) {
		
		$ret = array();		
		$params = explode("&", $nvpString);
		foreach($params as $p) {
			list($k, $v) = explode("=", $p);
			$ret[$k] = urldecode($v);
		}
		return $ret;
	}
	
	/**
	 * Returns true if the array contains a key like $key
	 * @param array $map
	 * @param regex $key
	 */
	public static function array_match_key($map, $key) {
		$key = str_replace("(", "\(", $key);
		$key = str_replace(")", "\)", $key);
		$key = str_replace(".", "\.", $key);
		$pattern = "/$key*/";
		foreach($map as $k => $v) {		
			preg_match($pattern, $k, $matches);
			if(count($matches) > 0)
				return true;
		}
		return false;
	}
	
	/**
	 * 
	 * Get the local IP address. The client address is a required
	 * request parameter for some API calls
	 */
	public static function getLocalIPAddress() {
		
		if(array_key_exists("SERVER_ADDR", $_SERVER)) {
			// SERVER_ADDR is available only if we are running the CGI SAPI
			return $_SERVER['SERVER_ADDR'];
		} else if(function_exists("gethostname")) {
			// gethostname is available only in PHP >= v5.3
			return gethostbyname( gethostname() );
		} else {
			// fallback if nothing works
			return "127.0.0.1";
		}
	}

	/**
	 * 
	 * Compute the value that needs to sent for the PAYPAL_REQUEST_SOURCE
	 * parameter when making API calls
	 */
	public function getRequestSource() {
		return str_replace(" ", "_", self::SDK_NAME). self::SDK_VERSION;
	}
}