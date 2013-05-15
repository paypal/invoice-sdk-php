<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Summary of invoice information. 
 */
class InvoiceSummaryType  
  extends PPMessage   {

	/**
	 * The created invoice's ID. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * Invoice creator's email. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $merchantEmail;

	/**
	 * Email to which the invoice will be sent. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $payerEmail;

	/**
	 * Unique identifier for the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $number;

	/**
	 * Business name of the billing info. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $billingBusinessName;

	/**
	 * First name of the billing info. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $billingFirstName;

	/**
	 * Last name of the billing info. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $billingLastName;

	/**
	 * Business name of the shipping info. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $shippingBusinessName;

	/**
	 * First name of the shipping info. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $shippingFirstName;

	/**
	 * Last name of the shipping info. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $shippingLastName;

	/**
	 * Total amount of the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public $totalAmount;

	/**
	 * Currency used for all invoice item amounts and totals. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $currencyCode;

	/**
	 * Date on which the invoice will be enabled. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $invoiceDate;

	/**
	 * Date on which the invoice payment is due. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $dueDate;

	/**
	 * Status of the invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $status;

	/**
	 * Whether the invoice was created via the website or via an
	 * API call. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $origin;

	/**
	 * BN code for tracking transactions with a particular partner.
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\string	 
	 */ 
	public $referrerCode;


}
