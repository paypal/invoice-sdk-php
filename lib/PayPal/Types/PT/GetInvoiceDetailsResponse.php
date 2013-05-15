<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The response object for CreateInvoice. 
 */
class GetInvoiceDetailsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public $responseEnvelope;

	/**
	 * The requested invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceType	 
	 */ 
	public $invoice;

	/**
	 * The requested invoice details. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceDetailsType	 
	 */ 
	public $invoiceDetails;

	/**
	 * The requested invoice payment details. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\PaymentDetailsType	 
	 */ 
	public $paymentDetails;

	/**
	 * The requested invoice refund details. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\PaymentRefundDetailsType	 
	 */ 
	public $refundDetails;

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
