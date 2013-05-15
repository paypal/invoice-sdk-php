<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Details of the refund made against this invoice. 
 */
class OtherPaymentRefundDetailsType  
  extends PPMessage   {

	/**
	 * Optional note associated with the refund. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $note;

	/**
	 * Date when the invoice was marked as refunded. If the date is
	 * not specified, the current date and time is used as a
	 * default. In addition, the date must be after the payment
	 * date of the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $date;


}
