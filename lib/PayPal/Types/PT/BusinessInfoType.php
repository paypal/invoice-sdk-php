<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * Contact information for a company participating in the
 * invoicing system. 
 */
class BusinessInfoType  
  extends PPMessage   {

	/**
	 * First name of the company contact. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $firstName;

	/**
	 * Last name of the company contact. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $lastName;

	/**
	 * Business name of the company. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $businessName;

	/**
	 * Phone number for contacting the company. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $phone;

	/**
	 * Fax number used by the company. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $fax;

	/**
	 * Website used by the company. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $website;

	/**
	 * Tax ID of the merchant. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $taxId;

	/**
	 * Custom value to be displayed in the contact information
	 * details. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $customValue;

	/**
	 * Street address of the company. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\BaseAddress	 
	 */ 
	public $address;


}
