<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for CancelInvoice. 
 */
class CancelInvoiceRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public $requestEnvelope;

	/**
	 * invoice's ID 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * Subject of the cancellation notification 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $subject;

	/**
	 * Note to send payer within the cancellation notification 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $noteForPayer;

	/**
	 * send a copy of cancellation notification to merchant 
	 * @access public
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $sendCopyToMerchant;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL) {
		$this->requestEnvelope = $requestEnvelope;
	}


}
