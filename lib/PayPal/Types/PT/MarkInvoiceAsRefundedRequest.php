<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for MarkInvoiceAsRefunded. 
 */
class MarkInvoiceAsRefundedRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to mark as refunded. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * Details of the refund made against this invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\OtherPaymentRefundDetailsType	 
	 */ 
	public $refundDetail;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL, $refundDetail = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
		$this->refundDetail = $refundDetail;
	}


}
