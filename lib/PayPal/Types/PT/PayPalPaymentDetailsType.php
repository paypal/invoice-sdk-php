<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * PayPal payment details about the invoice. 
 */
class PayPalPaymentDetailsType  
  extends PPMessage   {

	/**
	 * Transaction ID of the PayPal payment. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $transactionID;

	/**
	 * Date when the invoice was paid. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $date;


}
