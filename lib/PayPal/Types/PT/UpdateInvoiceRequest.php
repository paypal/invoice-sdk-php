<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for UpdateInvoice. 
 */
class UpdateInvoiceRequest  
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
	 * Data to populate the newly created invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceType	 
	 */ 
	public $invoice;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL, $invoice = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
		$this->invoice = $invoice;
	}


}
