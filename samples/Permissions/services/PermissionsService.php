<?php

require_once('PPBaseService.php');
require_once('Permissions.php');
require_once('PPUtils.php');
/**
 * Permissions wrapper class
 * Auto generated code
 */
class PermissionsService extends PPBaseService {
	public function __construct() {
		parent::__construct('Permissions');
	}

	/**
	 * Service Call: RequestPermissions
	 * @param RequestPermissionsRequest $requestPermissionsRequest
	 * @return RequestPermissionsResponse
	 * @throws APIException
	 */
	public function RequestPermissions($requestPermissionsRequest, $apiUsername=null) {
		$ret = new RequestPermissionsResponse();
		$resp = $this->call("RequestPermissions", $requestPermissionsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetAccessToken
	 * @param GetAccessTokenRequest $getAccessTokenRequest
	 * @return GetAccessTokenResponse
	 * @throws APIException
	 */
	public function GetAccessToken($getAccessTokenRequest, $apiUsername=null) {
		$ret = new GetAccessTokenResponse();
		$resp = $this->call("GetAccessToken", $getAccessTokenRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetPermissions
	 * @param GetPermissionsRequest $getPermissionsRequest
	 * @return GetPermissionsResponse
	 * @throws APIException
	 */
	public function GetPermissions($getPermissionsRequest, $apiUsername=null) {
		$ret = new GetPermissionsResponse();
		$resp = $this->call("GetPermissions", $getPermissionsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: CancelPermissions
	 * @param CancelPermissionsRequest $cancelPermissionsRequest
	 * @return CancelPermissionsResponse
	 * @throws APIException
	 */
	public function CancelPermissions($cancelPermissionsRequest, $apiUsername=null) {
		$ret = new CancelPermissionsResponse();
		$resp = $this->call("CancelPermissions", $cancelPermissionsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


}

?>