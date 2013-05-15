<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * A list of invoice summaries. 
 */
class InvoiceSummaryListType  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceSummaryType	 
	 */ 
	public $invoice;


}
