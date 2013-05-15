<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Payment details about the invoice. 
 */
class PaymentDetailsType  
  extends PPMessage   {

	/**
	 * True if the invoice was paid using PayPal. 
	 * @access public
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $viaPayPal;

	/**
	 * PayPal payment details. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\PayPalPaymentDetailsType	 
	 */ 
	public $paypalPayment;

	/**
	 * Other payment details. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\OtherPaymentDetailsType	 
	 */ 
	public $otherPayment;


}
