<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The response object for CancelInvoice. 
 */
class CancelInvoiceResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public $responseEnvelope;

	/**
	 * The canceled invoice's ID. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * The canceled invoice's number. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceNumber;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
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
