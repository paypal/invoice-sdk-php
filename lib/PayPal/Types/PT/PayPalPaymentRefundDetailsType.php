<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Details of the paypal refund made against this invoice. 
 */
class PayPalPaymentRefundDetailsType  
  extends PPMessage   {

	/**
	 * Date when the invoice was marked as refunded by PayPal. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $date;


}
