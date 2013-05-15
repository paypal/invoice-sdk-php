<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Invoice details about the invoice status and state change
 * dates. 
 */
class InvoiceDetailsType  
  extends PPMessage   {

	/**
	 * Status of the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $status;

	/**
	 * The total amount of the invoice (cost of items, shipping and
	 * tax, less any discount). This field is set by the invoicing
	 * system and will ignore any changes made by API callers. 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public $totalAmount;

	/**
	 * Whether the invoice was created via the website or via an
	 * API call. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $origin;

	/**
	 * Date when the invoice was created. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $createdDate;

	/**
	 * Account that created the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $createdBy;

	/**
	 * If canceled, date when the invoice was canceled. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $canceledDate;

	/**
	 * Actor who canceled the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $canceledByActor;

	/**
	 * Account that canceled the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $canceledBy;

	/**
	 * Date when the invoice was last edited. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $lastUpdatedDate;

	/**
	 * Account that last edited the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $lastUpdatedBy;

	/**
	 * Date when the invoice was first sent. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $firstSentDate;

	/**
	 * Date when the invoice was last sent. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $lastSentDate;

	/**
	 * Account that last sent the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $lastSentBy;

	/**
	 * If the invoice was paid, date when the invoice was paid. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $paidDate;


}
