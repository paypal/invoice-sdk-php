<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for CreateInvoice. 
 */
class CreateInvoiceRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public $requestEnvelope;

	/**
	 * Data to populate the newly created invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceType	 
	 */ 
	public $invoice;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoice = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoice = $invoice;
	}


}
