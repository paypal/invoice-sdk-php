<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Search parameters criteria. 
 */
class SearchParametersType  
  extends PPMessage   {

	/**
	 * Email search string. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $email;

	/**
	 * Recipient search string. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $recipientName;

	/**
	 * Company search string. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $businessName;

	/**
	 * Invoice number search string. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceNumber;

	/**
	 * Invoice status search. 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $status;

	/**
	 * Invoice amount search. Specifies the smallest amount to be
	 * returned. 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public $lowerAmount;

	/**
	 * Invoice amount search. Specifies the largest amount to be
	 * returned. 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public $upperAmount;

	/**
	 * Currency used for lower and upper amounts. Required when
	 * lowerAmount or upperAmount is specified. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $currencyCode;

	/**
	 * Invoice memo search string. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $memo;

	/**
	 * Whether the invoice was created via the website or via an
	 * API call. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $origin;

	/**
	 * Invoice date range filter. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\DateRangeType	 
	 */ 
	public $invoiceDate;

	/**
	 * Invoice due date range filter. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\DateRangeType	 
	 */ 
	public $dueDate;

	/**
	 * Invoice payment date range filter. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\DateRangeType	 
	 */ 
	public $paymentDate;

	/**
	 * Invoice creation date range filter. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\DateRangeType	 
	 */ 
	public $creationDate;


}
