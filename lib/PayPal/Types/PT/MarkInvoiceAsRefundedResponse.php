<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The response object for MarkInvoiceAsRefunded. 
 */
class MarkInvoiceAsRefundedResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public $responseEnvelope;

	/**
	 * The invoice ID of the invoice that was marked as refunded. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * The invoice number of the invoice that was marked as
	 * refunded. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceNumber;

	/**
	 * The URL of the details page of the invoice that was marked
	 * as refunded. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceURL;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ErrorData	 
	 */ 
	public $error;


}
