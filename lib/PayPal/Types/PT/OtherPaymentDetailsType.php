<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Offline payment details about the invoice. 
 */
class OtherPaymentDetailsType  
  extends PPMessage   {

	/**
	 * Method used for the offline payment. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $method;

	/**
	 * Optional note associated with the payment. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $note;

	/**
	 * Date when the invoice was paid. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $date;


}
