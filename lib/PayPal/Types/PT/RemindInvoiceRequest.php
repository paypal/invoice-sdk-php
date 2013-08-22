<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for RemindInvoice. 
 */
class RemindInvoiceRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to remind. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * Subject of the Reminder notification 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $subject;

	/**
	 * Note to send payer within the reminder notification 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $noteForPayer;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
	}


}
