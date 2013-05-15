<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for DeleteInvoice. 
 */
class DeleteInvoiceRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to be deleted. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
	}


}
