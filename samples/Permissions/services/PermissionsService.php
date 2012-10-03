<?php 
require_once('PPBaseService.php');
require_once('Permissions.php');
require_once('PPUtils.php');


/**
 * AUTO GENERATED code for Permissions
 */
class PermissionsService extends PPBaseService {

	// Service Version
	private static $SERVICE_VERSION = "";

	// Service Name
	private static $SERVICE_NAME = "Permissions";

	public function __construct() {
		parent::__construct('Permissions');
	}


	/**
	 * Service Call: RequestPermissions
	 * @param RequestPermissionsRequest $requestPermissionsRequest
	 * @return RequestPermissionsResponse
	 * @throws APIException
	 */
	public function RequestPermissions($requestPermissionsRequest, $apiUsername = NULL) {
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
	public function GetAccessToken($getAccessTokenRequest, $apiUsername = NULL) {
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
	public function GetPermissions($getPermissionsRequest, $apiUsername = NULL) {
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
	public function CancelPermissions($cancelPermissionsRequest, $apiUsername = NULL) {
		$ret = new CancelPermissionsResponse();
		$resp = $this->call("CancelPermissions", $cancelPermissionsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetBasicPersonalData
	 * @param GetBasicPersonalDataRequest $getBasicPersonalDataRequest
	 * @return GetBasicPersonalDataResponse
	 * @throws APIException
	 */
	public function GetBasicPersonalData($getBasicPersonalDataRequest, $apiUsername = NULL) {
		$ret = new GetBasicPersonalDataResponse();
		$resp = $this->call("GetBasicPersonalData", $getBasicPersonalDataRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetAdvancedPersonalData
	 * @param GetAdvancedPersonalDataRequest $getAdvancedPersonalDataRequest
	 * @return GetAdvancedPersonalDataResponse
	 * @throws APIException
	 */
	public function GetAdvancedPersonalData($getAdvancedPersonalDataRequest, $apiUsername = NULL) {
		$ret = new GetAdvancedPersonalDataResponse();
		$resp = $this->call("GetAdvancedPersonalData", $getAdvancedPersonalDataRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 
}
?>