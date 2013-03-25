<?php 

/**
 *  AUTO GENERATED code for Invoice
 */
class InvoiceService extends PPBaseService {

	// Service Version
	private static $SERVICE_VERSION = "1.8.0";

	// Service Name
	private static $SERVICE_NAME = "Invoice";

    // SDK Name
	protected static $SDK_NAME = "invoice-php-sdk";
	
	// SDK Version
	protected static $SDK_VERSION = "2.3.100";

	public function __construct($config = null) {
		parent::__construct(self::$SERVICE_NAME, 'NV', array('PPPlatformServiceHandler'), $config);
        parent::$SDK_NAME    = self::$SDK_NAME ;
        parent::$SDK_VERSION = self::$SDK_VERSION;
	}


	/**
	 * Service Call: CreateInvoice
	 * @param CreateInvoiceRequest $createInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return CreateInvoiceResponse
	 * @throws APIException
	 */
	public function CreateInvoice($createInvoiceRequest, $apiCredential = NULL) {
		$ret = new CreateInvoiceResponse();
		$resp = $this->call('Invoice', 'CreateInvoice', $createInvoiceRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: SendInvoice
	 * @param SendInvoiceRequest $sendInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return SendInvoiceResponse
	 * @throws APIException
	 */
	public function SendInvoice($sendInvoiceRequest, $apiCredential = NULL) {
		$ret = new SendInvoiceResponse();
		$resp = $this->call('Invoice', 'SendInvoice', $sendInvoiceRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: CreateAndSendInvoice
	 * @param CreateAndSendInvoiceRequest $createAndSendInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return CreateAndSendInvoiceResponse
	 * @throws APIException
	 */
	public function CreateAndSendInvoice($createAndSendInvoiceRequest, $apiCredential = NULL) {
		$ret = new CreateAndSendInvoiceResponse();
		$resp = $this->call('Invoice', 'CreateAndSendInvoice', $createAndSendInvoiceRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: UpdateInvoice
	 * @param UpdateInvoiceRequest $updateInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return UpdateInvoiceResponse
	 * @throws APIException
	 */
	public function UpdateInvoice($updateInvoiceRequest, $apiCredential = NULL) {
		$ret = new UpdateInvoiceResponse();
		$resp = $this->call('Invoice', 'UpdateInvoice', $updateInvoiceRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetInvoiceDetails
	 * @param GetInvoiceDetailsRequest $getInvoiceDetailsRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return GetInvoiceDetailsResponse
	 * @throws APIException
	 */
	public function GetInvoiceDetails($getInvoiceDetailsRequest, $apiCredential = NULL) {
		$ret = new GetInvoiceDetailsResponse();
		$resp = $this->call('Invoice', 'GetInvoiceDetails', $getInvoiceDetailsRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: CancelInvoice
	 * @param CancelInvoiceRequest $cancelInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return CancelInvoiceResponse
	 * @throws APIException
	 */
	public function CancelInvoice($cancelInvoiceRequest, $apiCredential = NULL) {
		$ret = new CancelInvoiceResponse();
		$resp = $this->call('Invoice', 'CancelInvoice', $cancelInvoiceRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: SearchInvoices
	 * @param SearchInvoicesRequest $searchInvoicesRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return SearchInvoicesResponse
	 * @throws APIException
	 */
	public function SearchInvoices($searchInvoicesRequest, $apiCredential = NULL) {
		$ret = new SearchInvoicesResponse();
		$resp = $this->call('Invoice', 'SearchInvoices', $searchInvoicesRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: MarkInvoiceAsPaid
	 * @param MarkInvoiceAsPaidRequest $markInvoiceAsPaidRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return MarkInvoiceAsPaidResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsPaid($markInvoiceAsPaidRequest, $apiCredential = NULL) {
		$ret = new MarkInvoiceAsPaidResponse();
		$resp = $this->call('Invoice', 'MarkInvoiceAsPaid', $markInvoiceAsPaidRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: MarkInvoiceAsUnpaid
	 * @param MarkInvoiceAsUnpaidRequest $markInvoiceAsUnpaidRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return MarkInvoiceAsUnpaidResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsUnpaid($markInvoiceAsUnpaidRequest, $apiCredential = NULL) {
		$ret = new MarkInvoiceAsUnpaidResponse();
		$resp = $this->call('Invoice', 'MarkInvoiceAsUnpaid', $markInvoiceAsUnpaidRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: MarkInvoiceAsRefunded
	 * @param MarkInvoiceAsRefundedRequest $markInvoiceAsRefundedRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return MarkInvoiceAsRefundedResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsRefunded($markInvoiceAsRefundedRequest, $apiCredential = NULL) {
		$ret = new MarkInvoiceAsRefundedResponse();
		$resp = $this->call('Invoice', 'MarkInvoiceAsRefunded', $markInvoiceAsRefundedRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: DeleteInvoice
	 * @param DeleteInvoiceRequest $deleteInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return DeleteInvoiceResponse
	 * @throws APIException
	 */
	public function DeleteInvoice($deleteInvoiceRequest, $apiCredential = NULL) {
		$ret = new DeleteInvoiceResponse();
		$resp = $this->call('Invoice', 'DeleteInvoice', $deleteInvoiceRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 
}