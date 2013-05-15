<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for MarkInvoiceAsPaid. 
 */
class MarkInvoiceAsPaidRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to mark as paid. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * Details of the payment made against this invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\OtherPaymentDetailsType	 
	 */ 
	public $payment;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL, $payment = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
		$this->payment = $payment;
	}


}
