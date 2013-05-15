<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * A list of invoice items. 
 */
class InvoiceItemListType  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceItemType	 
	 */ 
	public $item;

	/**
	 * Constructor with arguments
	 */
	public function __construct($item = NULL) {
		$this->item = $item;
	}


}
