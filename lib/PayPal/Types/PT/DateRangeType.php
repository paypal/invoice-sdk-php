<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Determines an inclusive date range. 
 */
class DateRangeType  
  extends PPMessage   {

	/**
	 * Start of the date range. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $startDate;

	/**
	 * End of the date range. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $endDate;


}
