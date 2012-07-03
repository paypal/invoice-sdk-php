<?php

require_once('PPBaseService.php');
require_once('Invoice.php');
require_once('PPUtils.php');
/**
 * Invoice wrapper class
 * Auto generated code
 */
class InvoiceService extends PPBaseService {
	private static $SERVICE_VERSION='1.6.0';
	public function __construct() {
		parent::__construct('Invoice');
	}

	/**
	 * Service Call: CreateInvoice
	 * @param CreateInvoiceRequest $createInvoiceRequest
	 * @return CreateInvoiceResponse
	 * @throws APIException
	 */
	public function CreateInvoice($createInvoiceRequest, $apiUsername=null) {
		$ret = new CreateInvoiceResponse();
		$resp = $this->call("CreateInvoice", $createInvoiceRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: SendInvoice
	 * @param SendInvoiceRequest $sendInvoiceRequest
	 * @return SendInvoiceResponse
	 * @throws APIException
	 */
	public function SendInvoice($sendInvoiceRequest, $apiUsername=null) {
		$ret = new SendInvoiceResponse();
		$resp = $this->call("SendInvoice", $sendInvoiceRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateAndSendInvoice
	 * @param CreateAndSendInvoiceRequest $createAndSendInvoiceRequest
	 * @return CreateAndSendInvoiceResponse
	 * @throws APIException
	 */
	public function CreateAndSendInvoice($createAndSendInvoiceRequest, $apiUsername=null) {
		$ret = new CreateAndSendInvoiceResponse();
		$resp = $this->call("CreateAndSendInvoice", $createAndSendInvoiceRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: UpdateInvoice
	 * @param UpdateInvoiceRequest $updateInvoiceRequest
	 * @return UpdateInvoiceResponse
	 * @throws APIException
	 */
	public function UpdateInvoice($updateInvoiceRequest, $apiUsername=null) {
		$ret = new UpdateInvoiceResponse();
		$resp = $this->call("UpdateInvoice", $updateInvoiceRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetInvoiceDetails
	 * @param GetInvoiceDetailsRequest $getInvoiceDetailsRequest
	 * @return GetInvoiceDetailsResponse
	 * @throws APIException
	 */
	public function GetInvoiceDetails($getInvoiceDetailsRequest, $apiUsername=null) {
		$ret = new GetInvoiceDetailsResponse();
		$resp = $this->call("GetInvoiceDetails", $getInvoiceDetailsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: CancelInvoice
	 * @param CancelInvoiceRequest $cancelInvoiceRequest
	 * @return CancelInvoiceResponse
	 * @throws APIException
	 */
	public function CancelInvoice($cancelInvoiceRequest, $apiUsername=null) {
		$ret = new CancelInvoiceResponse();
		$resp = $this->call("CancelInvoice", $cancelInvoiceRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: SearchInvoices
	 * @param SearchInvoicesRequest $searchInvoicesRequest
	 * @return SearchInvoicesResponse
	 * @throws APIException
	 */
	public function SearchInvoices($searchInvoicesRequest, $apiUsername=null) {
		$ret = new SearchInvoicesResponse();
		$resp = $this->call("SearchInvoices", $searchInvoicesRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: MarkInvoiceAsPaid
	 * @param MarkInvoiceAsPaidRequest $markInvoiceAsPaidRequest
	 * @return MarkInvoiceAsPaidResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsPaid($markInvoiceAsPaidRequest, $apiUsername=null) {
		$ret = new MarkInvoiceAsPaidResponse();
		$resp = $this->call("MarkInvoiceAsPaid", $markInvoiceAsPaidRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: MarkInvoiceAsUnpaid
	 * @param MarkInvoiceAsUnpaidRequest $markInvoiceAsUnpaidRequest
	 * @return MarkInvoiceAsUnpaidResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsUnpaid($markInvoiceAsUnpaidRequest, $apiUsername=null) {
		$ret = new MarkInvoiceAsUnpaidResponse();
		$resp = $this->call("MarkInvoiceAsUnpaid", $markInvoiceAsUnpaidRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: MarkInvoiceAsRefunded
	 * @param MarkInvoiceAsRefundedRequest $markInvoiceAsRefundedRequest
	 * @return MarkInvoiceAsRefundedResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsRefunded($markInvoiceAsRefundedRequest, $apiUsername=null) {
		$ret = new MarkInvoiceAsRefundedResponse();
		$resp = $this->call("MarkInvoiceAsRefunded", $markInvoiceAsRefundedRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


}

?>