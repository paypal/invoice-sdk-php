<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Item information about a service or product listed in the
 * invoice. 
 */
class InvoiceItemType  
  extends PPMessage   {

	/**
	 * SKU or item name. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $name;

	/**
	 * Description of the item. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $description;

	/**
	 * Date on which the product or service was provided. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $date;

	/**
	 * Item count. 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public $quantity;

	/**
	 * Price of the item, in the currency specified by the invoice.
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public $unitPrice;

	/**
	 * Name of an applicable tax, if any. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $taxName;

	/**
	 * Rate of an applicable tax, if any. 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public $taxRate;

	/**
	 * Constructor with arguments
	 */
	public function __construct($name = NULL, $quantity = NULL, $unitPrice = NULL) {
		$this->name = $name;
		$this->quantity = $quantity;
		$this->unitPrice = $unitPrice;
	}


}
