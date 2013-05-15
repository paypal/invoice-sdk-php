<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Payment refund details about the invoice.  
 */
class PaymentRefundDetailsType  
  extends PPMessage   {

	/**
	 * True if the invoice was refunded using PayPal.  
	 * @access public
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $viaPayPal;

	/**
	 * Other payment refund details.  
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\PayPalPaymentRefundDetailsType	 
	 */ 
	public $paypalPayment;

	/**
	 * details.  
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\OtherPaymentRefundDetailsType	 
	 */ 
	public $otherPayment;


}
