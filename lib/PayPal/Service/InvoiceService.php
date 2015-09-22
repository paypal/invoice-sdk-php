<?php
namespace PayPal\Service;
use PayPal\Common\PPApiContext;
use PayPal\Core\PPMessage;
use PayPal\Core\PPBaseService;
use PayPal\Core\PPUtils;
use PayPal\Handler\PPPlatformServiceHandler;
use PayPal\Types\PT\CreateInvoiceResponse;
use PayPal\Types\PT\SendInvoiceResponse;
use PayPal\Types\PT\RemindInvoiceResponse;
use PayPal\Types\PT\CreateAndSendInvoiceResponse;
use PayPal\Types\PT\UpdateInvoiceResponse;
use PayPal\Types\PT\GetInvoiceDetailsResponse;
use PayPal\Types\PT\CancelInvoiceResponse;
use PayPal\Types\PT\SearchInvoicesResponse;
use PayPal\Types\PT\MarkInvoiceAsPaidResponse;
use PayPal\Types\PT\MarkInvoiceAsUnpaidResponse;
use PayPal\Types\PT\MarkInvoiceAsRefundedResponse;
use PayPal\Types\PT\DeleteInvoiceResponse;

/**
 * AUTO GENERATED code for Invoice
 */
class InvoiceService extends PPBaseService {

	// Service Version
	private static $SERVICE_VERSION = "1.10.0";

	// Service Name
	private static $SERVICE_NAME = "Invoice";

    // SDK Name
	protected static $SDK_NAME = "invoice-php-sdk";

	// SDK Version
	protected static $SDK_VERSION = "3.9.0";

    /**
    * @param $config - Dynamic config map. This takes the higher precedence if config file is also present.
    *
    */
	public function __construct($config = null) {
		parent::__construct(self::$SERVICE_NAME, 'NV', $config);
	}


	/**
	 * Service Call: CreateInvoice
	 * @param CreateInvoiceRequest $createInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\CreateInvoiceResponse
	 * @throws APIException
	 */
	public function CreateInvoice($createInvoiceRequest, $apiCredential = NULL) {
		$ret = new CreateInvoiceResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'CreateInvoice', $createInvoiceRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: SendInvoice
	 * @param SendInvoiceRequest $sendInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\SendInvoiceResponse
	 * @throws APIException
	 */
	public function SendInvoice($sendInvoiceRequest, $apiCredential = NULL) {
		$ret = new SendInvoiceResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'SendInvoice', $sendInvoiceRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: RemindInvoice
	 * @param RemindInvoiceRequest $remindInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\RemindInvoiceResponse
	 * @throws APIException
	 */
	public function RemindInvoice($remindInvoiceRequest, $apiCredential = NULL) {
		$ret = new RemindInvoiceResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'RemindInvoice', $remindInvoiceRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateAndSendInvoice
	 * @param CreateAndSendInvoiceRequest $createAndSendInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\CreateAndSendInvoiceResponse
	 * @throws APIException
	 */
	public function CreateAndSendInvoice($createAndSendInvoiceRequest, $apiCredential = NULL) {
		$ret = new CreateAndSendInvoiceResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'CreateAndSendInvoice', $createAndSendInvoiceRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: UpdateInvoice
	 * @param UpdateInvoiceRequest $updateInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\UpdateInvoiceResponse
	 * @throws APIException
	 */
	public function UpdateInvoice($updateInvoiceRequest, $apiCredential = NULL) {
		$ret = new UpdateInvoiceResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'UpdateInvoice', $updateInvoiceRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetInvoiceDetails
	 * @param GetInvoiceDetailsRequest $getInvoiceDetailsRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\GetInvoiceDetailsResponse
	 * @throws APIException
	 */
	public function GetInvoiceDetails($getInvoiceDetailsRequest, $apiCredential = NULL) {
		$ret = new GetInvoiceDetailsResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'GetInvoiceDetails', $getInvoiceDetailsRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: CancelInvoice
	 * @param CancelInvoiceRequest $cancelInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\CancelInvoiceResponse
	 * @throws APIException
	 */
	public function CancelInvoice($cancelInvoiceRequest, $apiCredential = NULL) {
		$ret = new CancelInvoiceResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'CancelInvoice', $cancelInvoiceRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: SearchInvoices
	 * @param SearchInvoicesRequest $searchInvoicesRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\SearchInvoicesResponse
	 * @throws APIException
	 */
	public function SearchInvoices($searchInvoicesRequest, $apiCredential = NULL) {
		$ret = new SearchInvoicesResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'SearchInvoices', $searchInvoicesRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: MarkInvoiceAsPaid
	 * @param MarkInvoiceAsPaidRequest $markInvoiceAsPaidRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\MarkInvoiceAsPaidResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsPaid($markInvoiceAsPaidRequest, $apiCredential = NULL) {
		$ret = new MarkInvoiceAsPaidResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'MarkInvoiceAsPaid', $markInvoiceAsPaidRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: MarkInvoiceAsUnpaid
	 * @param MarkInvoiceAsUnpaidRequest $markInvoiceAsUnpaidRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\MarkInvoiceAsUnpaidResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsUnpaid($markInvoiceAsUnpaidRequest, $apiCredential = NULL) {
		$ret = new MarkInvoiceAsUnpaidResponse();
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $resp = $this->call('Invoice', 'MarkInvoiceAsUnpaid', $markInvoiceAsUnpaidRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: MarkInvoiceAsRefunded
	 * @param MarkInvoiceAsRefundedRequest $markInvoiceAsRefundedRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\MarkInvoiceAsRefundedResponse
	 * @throws APIException
	 */
	public function MarkInvoiceAsRefunded($markInvoiceAsRefundedRequest, $apiCredential = NULL) {
		$ret = new MarkInvoiceAsRefundedResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'MarkInvoiceAsRefunded', $markInvoiceAsRefundedRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: DeleteInvoice
	 * @param DeleteInvoiceRequest $deleteInvoiceRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return Types\PT\DeleteInvoiceResponse
	 * @throws APIException
	 */
	public function DeleteInvoice($deleteInvoiceRequest, $apiCredential = NULL) {
		$ret = new DeleteInvoiceResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp = $this->call('Invoice', 'DeleteInvoice', $deleteInvoiceRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}

}
