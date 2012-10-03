<?php
 /**
  * Stub objects for Invoice 
  * Auto generated code 
  * 
  */
require_once('PPUtils.php');
/**
 * 
 */
class BaseAddress  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $line1;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $line2;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $city;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $state;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $postalCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $type;

	/**
	 * Constructor with arguments
	 */
	public function __construct($line1 = NULL, $city = NULL, $countryCode = NULL) {
		$this->line1 = $line1;
		$this->city = $city;
		$this->countryCode = $countryCode;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->line1 != NULL) {
			$str .= $delim .  $prefix . 'line1=' . urlencode($this->line1);
			$delim = '&';
		}
		if($this->line2 != NULL) {
			$str .= $delim .  $prefix . 'line2=' . urlencode($this->line2);
			$delim = '&';
		}
		if($this->city != NULL) {
			$str .= $delim .  $prefix . 'city=' . urlencode($this->city);
			$delim = '&';
		}
		if($this->state != NULL) {
			$str .= $delim .  $prefix . 'state=' . urlencode($this->state);
			$delim = '&';
		}
		if($this->postalCode != NULL) {
			$str .= $delim .  $prefix . 'postalCode=' . urlencode($this->postalCode);
			$delim = '&';
		}
		if($this->countryCode != NULL) {
			$str .= $delim .  $prefix . 'countryCode=' . urlencode($this->countryCode);
			$delim = '&';
		}
		if($this->type != NULL) {
			$str .= $delim .  $prefix . 'type=' . urlencode($this->type);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'line1';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->line1 = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'line2';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->line2 = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'city';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->city = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'state';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->state = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'postalCode';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->postalCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'countryCode';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->countryCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'type';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->type = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This type contains the detailed error information resulting
 * from the service operation. 
 */
class ErrorData  {

	/**
	 * 
	 * @access public
	 * @var integer
	 */ 
	public $errorId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $domain;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $subdomain;

	/**
	 * 
	 * @access public
	 * @var ErrorSeverity
	 */ 
	public $severity;

	/**
	 * 
	 * @access public
	 * @var ErrorCategory
	 */ 
	public $category;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $message;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $exceptionId;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorParameter
	 */ 
	public $parameter;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'errorId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->errorId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'domain';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->domain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'subdomain';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->subdomain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'severity';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->severity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'category';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->category = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'exceptionId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->exceptionId = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "parameter($i)")) {
					$newPrefix = $prefix . "parameter($i).";
					$this->parameter[$i] = new ErrorParameter();
					$this->parameter[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * 
 */
class ErrorParameter  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $value;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'name';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'value';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->value = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This specifies a fault, encapsulating error data, with
 * specific error codes. 
 */
class FaultMessage  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
class RequestEnvelope  {

	/**
	 * This specifies the required detail level that is needed by a
	 * client application pertaining to a particular data component
	 * (e.g., Item, Transaction, etc.). The detail level is
	 * specified in the DetailLevelCodeType which has all the
	 * enumerated values of the detail level for each component. 
	 * @access public
	 * @var DetailLevelCode
	 */ 
	public $detailLevel;

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 * @access public
	 * @var string
	 */ 
	public $errorLanguage;

	/**
	 * Constructor with arguments
	 */
	public function __construct($errorLanguage = NULL) {
		$this->errorLanguage = $errorLanguage;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->detailLevel != NULL) {
			$str .= $delim .  $prefix . 'detailLevel=' . urlencode($this->detailLevel);
			$delim = '&';
		}
		if($this->errorLanguage != NULL) {
			$str .= $delim .  $prefix . 'errorLanguage=' . urlencode($this->errorLanguage);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * This specifies a list of parameters with every response from
 * a service. 
 */
class ResponseEnvelope  {

	/**
	 * 
	 * @access public
	 * @var dateTime
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgment code. 
	 * @access public
	 * @var AckCode
	 */ 
	public $ack;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $correlationId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $build;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'timestamp';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->timestamp = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ack';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->ack = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'correlationId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->correlationId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'build';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->build = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Contact information for a company participating in the
 * invoicing system. 
 */
class BusinessInfoType  {

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
	 * Custom value to be displayed in the contact information
	 * details. 
	 * @access public
	 * @var string
	 */ 
	public $customValue;

	/**
	 * Street address of the company. 
	 * @access public
	 * @var BaseAddress
	 */ 
	public $address;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->firstName != NULL) {
			$str .= $delim .  $prefix . 'firstName=' . urlencode($this->firstName);
			$delim = '&';
		}
		if($this->lastName != NULL) {
			$str .= $delim .  $prefix . 'lastName=' . urlencode($this->lastName);
			$delim = '&';
		}
		if($this->businessName != NULL) {
			$str .= $delim .  $prefix . 'businessName=' . urlencode($this->businessName);
			$delim = '&';
		}
		if($this->phone != NULL) {
			$str .= $delim .  $prefix . 'phone=' . urlencode($this->phone);
			$delim = '&';
		}
		if($this->fax != NULL) {
			$str .= $delim .  $prefix . 'fax=' . urlencode($this->fax);
			$delim = '&';
		}
		if($this->website != NULL) {
			$str .= $delim .  $prefix . 'website=' . urlencode($this->website);
			$delim = '&';
		}
		if($this->customValue != NULL) {
			$str .= $delim .  $prefix . 'customValue=' . urlencode($this->customValue);
			$delim = '&';
		}
		if($this->address != NULL) {
			$newPrefix = $prefix . 'address.';
			$str .= $delim . call_user_func(array($this->address, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'firstName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->firstName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->lastName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'businessName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->businessName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'phone';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->phone = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'fax';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->fax = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'website';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->website = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'customValue';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->customValue = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "address.")) {
				$newPrefix = $prefix . "address.";
				$this->address = new BaseAddress();
				$this->address->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * Item information about a service or product listed in the
 * invoice. 
 */
class InvoiceItemType  {

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


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->name != NULL) {
			$str .= $delim .  $prefix . 'name=' . urlencode($this->name);
			$delim = '&';
		}
		if($this->description != NULL) {
			$str .= $delim .  $prefix . 'description=' . urlencode($this->description);
			$delim = '&';
		}
		if($this->date != NULL) {
			$str .= $delim .  $prefix . 'date=' . urlencode($this->date);
			$delim = '&';
		}
		if($this->quantity != NULL) {
			$str .= $delim .  $prefix . 'quantity=' . urlencode($this->quantity);
			$delim = '&';
		}
		if($this->unitPrice != NULL) {
			$str .= $delim .  $prefix . 'unitPrice=' . urlencode($this->unitPrice);
			$delim = '&';
		}
		if($this->taxName != NULL) {
			$str .= $delim .  $prefix . 'taxName=' . urlencode($this->taxName);
			$delim = '&';
		}
		if($this->taxRate != NULL) {
			$str .= $delim .  $prefix . 'taxRate=' . urlencode($this->taxRate);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'name';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'description';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->description = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'date';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->date = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'quantity';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->quantity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'unitPrice';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->unitPrice = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'taxName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->taxName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'taxRate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->taxRate = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * A list of invoice items. 
 */
class InvoiceItemListType  {

	/**
	 * 
     * @array
	 * @access public
	 * @var InvoiceItemType
	 */ 
	public $item;

	/**
	 * Constructor with arguments
	 */
	public function __construct($item = NULL) {
		$this->item = $item;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->item); $i++) {
			$newPrefix = $prefix . "item($i).";
			$str .= $delim . call_user_func(array($this->item[$i], 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "item($i)")) {
					$newPrefix = $prefix . "item($i).";
					$this->item[$i] = new InvoiceItemType();
					$this->item[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Invoice details about the merchant, payer, totals and terms.
 * 
 */
class InvoiceType  {

	/**
	 * Merchant's email. 
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
	 * Company contact information of the merchant company sending
	 * the invoice. 
	 * @access public
	 * @var BusinessInfoType
	 */ 
	public $merchantInfo;

	/**
	 * List of items included in this invoice. 
	 * @access public
	 * @var InvoiceItemListType
	 */ 
	public $itemList;

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
	 * Terms by which the invoice payment is due. 
	 * @access public
	 * @var PaymentTermsType
	 */ 
	public $paymentTerms;

	/**
	 * A discount percent applied to the invoice, if any. 
	 * @access public
	 * @var double
	 */ 
	public $discountPercent;

	/**
	 * A discount amount applied to the invoice, if any. If
	 * DiscountPercent is provided, DiscountAmount is ignored. 
	 * @access public
	 * @var double
	 */ 
	public $discountAmount;

	/**
	 * General terms for the invoice. 
	 * @access public
	 * @var string
	 */ 
	public $terms;

	/**
	 * Note to the payer company. 
	 * @access public
	 * @var string
	 */ 
	public $note;

	/**
	 * Memo for book keeping that is private to the Merchant. 
	 * @access public
	 * @var string
	 */ 
	public $merchantMemo;

	/**
	 * Billing information for the payer. 
	 * @access public
	 * @var BusinessInfoType
	 */ 
	public $billingInfo;

	/**
	 * Shipping information for the payer. 
	 * @access public
	 * @var BusinessInfoType
	 */ 
	public $shippingInfo;

	/**
	 * Cost of shipping. 
	 * @access public
	 * @var double
	 */ 
	public $shippingAmount;

	/**
	 * Name of the applicable tax on shipping cost, if any. 
	 * @access public
	 * @var string
	 */ 
	public $shippingTaxName;

	/**
	 * Rate of the applicable tax on shipping cost, if any. 
	 * @access public
	 * @var double
	 */ 
	public $shippingTaxRate;

	/**
	 * The external image URL of the invoice's logo, if any 
	 * @access public
	 * @var string
	 */ 
	public $logoUrl;

	/**
	 * BN code for tracking transactions with a particular partner.
	 * 
	 * @access public
	 * @var string
	 */ 
	public $referrerCode;

	/**
	 * Label used to display custom amount value. If a value is
	 * entered for customAmountLabel, then customAmountValue cannot
	 * be empty. 
	 * @access public
	 * @var string
	 */ 
	public $customAmountLabel;

	/**
	 * Value of custom amount. If a value is entered for
	 * customAmountValue, then customAmountLabel cannot be empty. 
	 * @access public
	 * @var double
	 */ 
	public $customAmountValue;

	/**
	 * Constructor with arguments
	 */
	public function __construct($merchantEmail = NULL, $payerEmail = NULL, $itemList = NULL, $currencyCode = NULL, $paymentTerms = NULL) {
		$this->merchantEmail = $merchantEmail;
		$this->payerEmail = $payerEmail;
		$this->itemList = $itemList;
		$this->currencyCode = $currencyCode;
		$this->paymentTerms = $paymentTerms;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->merchantEmail != NULL) {
			$str .= $delim .  $prefix . 'merchantEmail=' . urlencode($this->merchantEmail);
			$delim = '&';
		}
		if($this->payerEmail != NULL) {
			$str .= $delim .  $prefix . 'payerEmail=' . urlencode($this->payerEmail);
			$delim = '&';
		}
		if($this->number != NULL) {
			$str .= $delim .  $prefix . 'number=' . urlencode($this->number);
			$delim = '&';
		}
		if($this->merchantInfo != NULL) {
			$newPrefix = $prefix . 'merchantInfo.';
			$str .= $delim . call_user_func(array($this->merchantInfo, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->itemList != NULL) {
			$newPrefix = $prefix . 'itemList.';
			$str .= $delim . call_user_func(array($this->itemList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->currencyCode != NULL) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		if($this->invoiceDate != NULL) {
			$str .= $delim .  $prefix . 'invoiceDate=' . urlencode($this->invoiceDate);
			$delim = '&';
		}
		if($this->dueDate != NULL) {
			$str .= $delim .  $prefix . 'dueDate=' . urlencode($this->dueDate);
			$delim = '&';
		}
		if($this->paymentTerms != NULL) {
			$str .= $delim .  $prefix . 'paymentTerms=' . urlencode($this->paymentTerms);
			$delim = '&';
		}
		if($this->discountPercent != NULL) {
			$str .= $delim .  $prefix . 'discountPercent=' . urlencode($this->discountPercent);
			$delim = '&';
		}
		if($this->discountAmount != NULL) {
			$str .= $delim .  $prefix . 'discountAmount=' . urlencode($this->discountAmount);
			$delim = '&';
		}
		if($this->terms != NULL) {
			$str .= $delim .  $prefix . 'terms=' . urlencode($this->terms);
			$delim = '&';
		}
		if($this->note != NULL) {
			$str .= $delim .  $prefix . 'note=' . urlencode($this->note);
			$delim = '&';
		}
		if($this->merchantMemo != NULL) {
			$str .= $delim .  $prefix . 'merchantMemo=' . urlencode($this->merchantMemo);
			$delim = '&';
		}
		if($this->billingInfo != NULL) {
			$newPrefix = $prefix . 'billingInfo.';
			$str .= $delim . call_user_func(array($this->billingInfo, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->shippingInfo != NULL) {
			$newPrefix = $prefix . 'shippingInfo.';
			$str .= $delim . call_user_func(array($this->shippingInfo, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->shippingAmount != NULL) {
			$str .= $delim .  $prefix . 'shippingAmount=' . urlencode($this->shippingAmount);
			$delim = '&';
		}
		if($this->shippingTaxName != NULL) {
			$str .= $delim .  $prefix . 'shippingTaxName=' . urlencode($this->shippingTaxName);
			$delim = '&';
		}
		if($this->shippingTaxRate != NULL) {
			$str .= $delim .  $prefix . 'shippingTaxRate=' . urlencode($this->shippingTaxRate);
			$delim = '&';
		}
		if($this->logoUrl != NULL) {
			$str .= $delim .  $prefix . 'logoUrl=' . urlencode($this->logoUrl);
			$delim = '&';
		}
		if($this->referrerCode != NULL) {
			$str .= $delim .  $prefix . 'referrerCode=' . urlencode($this->referrerCode);
			$delim = '&';
		}
		if($this->customAmountLabel != NULL) {
			$str .= $delim .  $prefix . 'customAmountLabel=' . urlencode($this->customAmountLabel);
			$delim = '&';
		}
		if($this->customAmountValue != NULL) {
			$str .= $delim .  $prefix . 'customAmountValue=' . urlencode($this->customAmountValue);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'merchantEmail';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->merchantEmail = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'payerEmail';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->payerEmail = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'number';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->number = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "merchantInfo.")) {
				$newPrefix = $prefix . "merchantInfo.";
				$this->merchantInfo = new BusinessInfoType();
				$this->merchantInfo->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "itemList.")) {
				$newPrefix = $prefix . "itemList.";
				$this->itemList = new InvoiceItemListType();
				$this->itemList->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'currencyCode';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->currencyCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'dueDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->dueDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'paymentTerms';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->paymentTerms = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'discountPercent';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->discountPercent = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'discountAmount';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->discountAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'terms';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->terms = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'note';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->note = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'merchantMemo';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->merchantMemo = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "billingInfo.")) {
				$newPrefix = $prefix . "billingInfo.";
				$this->billingInfo = new BusinessInfoType();
				$this->billingInfo->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "shippingInfo.")) {
				$newPrefix = $prefix . "shippingInfo.";
				$this->shippingInfo = new BusinessInfoType();
				$this->shippingInfo->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'shippingAmount';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->shippingAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'shippingTaxName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->shippingTaxName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'shippingTaxRate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->shippingTaxRate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'logoUrl';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->logoUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'referrerCode';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->referrerCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'customAmountLabel';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->customAmountLabel = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'customAmountValue';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->customAmountValue = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Invoice details about the invoice status and state change
 * dates. 
 */
class InvoiceDetailsType  {

	/**
	 * Status of the invoice. 
	 * @access public
	 * @var StatusType
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
	 * @var OriginType
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
	 * @var ActorType
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



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'status';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->status = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'totalAmount';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->totalAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'origin';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->origin = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'createdDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->createdDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'createdBy';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->createdBy = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'canceledDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->canceledDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'canceledByActor';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->canceledByActor = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'canceledBy';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->canceledBy = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastUpdatedDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->lastUpdatedDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastUpdatedBy';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->lastUpdatedBy = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'firstSentDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->firstSentDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastSentDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->lastSentDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastSentBy';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->lastSentBy = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'paidDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->paidDate = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Details of the refund made against this invoice. 
 */
class OtherPaymentRefundDetailsType  {

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


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->note != NULL) {
			$str .= $delim .  $prefix . 'note=' . urlencode($this->note);
			$delim = '&';
		}
		if($this->date != NULL) {
			$str .= $delim .  $prefix . 'date=' . urlencode($this->date);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'note';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->note = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'date';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->date = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Details of the paypal refund made against this invoice. 
 */
class PayPalPaymentRefundDetailsType  {

	/**
	 * Date when the invoice was marked as refunded by PayPal. 
	 * @access public
	 * @var dateTime
	 */ 
	public $date;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'date';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->date = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * PayPal payment details about the invoice. 
 */
class PayPalPaymentDetailsType  {

	/**
	 * Transaction ID of the PayPal payment. 
	 * @access public
	 * @var string
	 */ 
	public $transactionID;

	/**
	 * Date when the invoice was paid. 
	 * @access public
	 * @var dateTime
	 */ 
	public $date;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'transactionID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->transactionID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'date';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->date = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Offline payment details about the invoice. 
 */
class OtherPaymentDetailsType  {

	/**
	 * Method used for the offline payment. 
	 * @access public
	 * @var PaymentMethodsType
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


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->method != NULL) {
			$str .= $delim .  $prefix . 'method=' . urlencode($this->method);
			$delim = '&';
		}
		if($this->note != NULL) {
			$str .= $delim .  $prefix . 'note=' . urlencode($this->note);
			$delim = '&';
		}
		if($this->date != NULL) {
			$str .= $delim .  $prefix . 'date=' . urlencode($this->date);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'method';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->method = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'note';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->note = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'date';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->date = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Payment details about the invoice. 
 */
class PaymentDetailsType  {

	/**
	 * True if the invoice was paid using PayPal. 
	 * @access public
	 * @var boolean
	 */ 
	public $viaPayPal;

	/**
	 * PayPal payment details. 
	 * @access public
	 * @var PayPalPaymentDetailsType
	 */ 
	public $paypalPayment;

	/**
	 * Other payment details. 
	 * @access public
	 * @var OtherPaymentDetailsType
	 */ 
	public $otherPayment;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'viaPayPal';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->viaPayPal = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "paypalPayment.")) {
				$newPrefix = $prefix . "paypalPayment.";
				$this->paypalPayment = new PayPalPaymentDetailsType();
				$this->paypalPayment->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "otherPayment.")) {
				$newPrefix = $prefix . "otherPayment.";
				$this->otherPayment = new OtherPaymentDetailsType();
				$this->otherPayment->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * Determines an inclusive date range. 
 */
class DateRangeType  {

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


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->startDate != NULL) {
			$str .= $delim .  $prefix . 'startDate=' . urlencode($this->startDate);
			$delim = '&';
		}
		if($this->endDate != NULL) {
			$str .= $delim .  $prefix . 'endDate=' . urlencode($this->endDate);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Search parameters criteria. 
 */
class SearchParametersType  {

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
	 * @var StatusType
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
	 * @var OriginType
	 */ 
	public $origin;

	/**
	 * Invoice date range filter. 
	 * @access public
	 * @var DateRangeType
	 */ 
	public $invoiceDate;

	/**
	 * Invoice due date range filter. 
	 * @access public
	 * @var DateRangeType
	 */ 
	public $dueDate;

	/**
	 * Invoice payment date range filter. 
	 * @access public
	 * @var DateRangeType
	 */ 
	public $paymentDate;

	/**
	 * Invoice creation date range filter. 
	 * @access public
	 * @var DateRangeType
	 */ 
	public $creationDate;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->email != NULL) {
			$str .= $delim .  $prefix . 'email=' . urlencode($this->email);
			$delim = '&';
		}
		if($this->recipientName != NULL) {
			$str .= $delim .  $prefix . 'recipientName=' . urlencode($this->recipientName);
			$delim = '&';
		}
		if($this->businessName != NULL) {
			$str .= $delim .  $prefix . 'businessName=' . urlencode($this->businessName);
			$delim = '&';
		}
		if($this->invoiceNumber != NULL) {
			$str .= $delim .  $prefix . 'invoiceNumber=' . urlencode($this->invoiceNumber);
			$delim = '&';
		}
		for($i = 0; $i < count($this->status); $i++) {
			$str .= $delim .  $prefix . "status($i)=" .  urlencode($this->status[$i]);
			$delim = '&';
		}
		if($this->lowerAmount != NULL) {
			$str .= $delim .  $prefix . 'lowerAmount=' . urlencode($this->lowerAmount);
			$delim = '&';
		}
		if($this->upperAmount != NULL) {
			$str .= $delim .  $prefix . 'upperAmount=' . urlencode($this->upperAmount);
			$delim = '&';
		}
		if($this->currencyCode != NULL) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		if($this->memo != NULL) {
			$str .= $delim .  $prefix . 'memo=' . urlencode($this->memo);
			$delim = '&';
		}
		if($this->origin != NULL) {
			$str .= $delim .  $prefix . 'origin=' . urlencode($this->origin);
			$delim = '&';
		}
		if($this->invoiceDate != NULL) {
			$newPrefix = $prefix . 'invoiceDate.';
			$str .= $delim . call_user_func(array($this->invoiceDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->dueDate != NULL) {
			$newPrefix = $prefix . 'dueDate.';
			$str .= $delim . call_user_func(array($this->dueDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->paymentDate != NULL) {
			$newPrefix = $prefix . 'paymentDate.';
			$str .= $delim . call_user_func(array($this->paymentDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->creationDate != NULL) {
			$newPrefix = $prefix . 'creationDate.';
			$str .= $delim . call_user_func(array($this->creationDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Summary of invoice information. 
 */
class InvoiceSummaryType  {

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
	 * @var StatusType
	 */ 
	public $status;

	/**
	 * Whether the invoice was created via the website or via an
	 * API call. 
	 * @access public
	 * @var OriginType
	 */ 
	public $origin;

	/**
	 * BN code for tracking transactions with a particular partner.
	 * 
	 * @access public
	 * @var string
	 */ 
	public $referrerCode;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'merchantEmail';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->merchantEmail = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'payerEmail';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->payerEmail = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'number';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->number = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'billingBusinessName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->billingBusinessName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'billingFirstName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->billingFirstName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'billingLastName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->billingLastName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'shippingBusinessName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->shippingBusinessName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'shippingFirstName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->shippingFirstName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'shippingLastName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->shippingLastName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'totalAmount';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->totalAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'currencyCode';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->currencyCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'dueDate';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->dueDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'status';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->status = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'origin';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->origin = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'referrerCode';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->referrerCode = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * A list of invoice summaries. 
 */
class InvoiceSummaryListType  {

	/**
	 * 
     * @array
	 * @access public
	 * @var InvoiceSummaryType
	 */ 
	public $invoice;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "invoice($i)")) {
					$newPrefix = $prefix . "invoice($i).";
					$this->invoice[$i] = new InvoiceSummaryType();
					$this->invoice[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for CreateInvoice. 
 */
class CreateInvoiceRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Data to populate the newly created invoice. 
	 * @access public
	 * @var InvoiceType
	 */ 
	public $invoice;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoice = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoice = $invoice;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoice != NULL) {
			$newPrefix = $prefix . 'invoice.';
			$str .= $delim . call_user_func(array($this->invoice, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for CreateInvoice. 
 */
class CreateInvoiceResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The created invoice's ID. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The created invoice's number. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceNumber;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * The total amount of the invoice (cost of items, shipping and
	 * tax, less any discount). 
	 * @access public
	 * @var integer
	 */ 
	public $totalAmount;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceNumber';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'totalAmount';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->totalAmount = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for SendInvoice. 
 */
class SendInvoiceRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to send. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoiceID != NULL) {
			$str .= $delim .  $prefix . 'invoiceID=' . urlencode($this->invoiceID);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for SendInvoice. 
 */
class SendInvoiceResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The sent invoice's ID. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for CreateAndSendInvoice. 
 */
class CreateAndSendInvoiceRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Data to populate the newly created invoice. 
	 * @access public
	 * @var InvoiceType
	 */ 
	public $invoice;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoice = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoice = $invoice;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoice != NULL) {
			$newPrefix = $prefix . 'invoice.';
			$str .= $delim . call_user_func(array($this->invoice, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for CreateAndSendInvoice. 
 */
class CreateAndSendInvoiceResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The created invoice's ID. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The created invoice's number. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceNumber;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * The total amount of the invoice (cost of items, shipping and
	 * tax, less any discount). 
	 * @access public
	 * @var integer
	 */ 
	public $totalAmount;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceNumber';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'totalAmount';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->totalAmount = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for UpdateInvoice. 
 */
class UpdateInvoiceRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * invoice's ID 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * Data to populate the newly created invoice. 
	 * @access public
	 * @var InvoiceType
	 */ 
	public $invoice;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL, $invoice = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
		$this->invoice = $invoice;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoiceID != NULL) {
			$str .= $delim .  $prefix . 'invoiceID=' . urlencode($this->invoiceID);
			$delim = '&';
		}
		if($this->invoice != NULL) {
			$newPrefix = $prefix . 'invoice.';
			$str .= $delim . call_user_func(array($this->invoice, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for UpdateInvoice. 
 */
class UpdateInvoiceResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The invoice's ID. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The updated invoice's number. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceNumber;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * The total amount of the invoice (cost of items, shipping and
	 * tax, less any discount). 
	 * @access public
	 * @var integer
	 */ 
	public $totalAmount;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceNumber';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'totalAmount';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->totalAmount = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for GetInvoiceDetails. 
 */
class GetInvoiceDetailsRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to retrieve. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoiceID != NULL) {
			$str .= $delim .  $prefix . 'invoiceID=' . urlencode($this->invoiceID);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for CreateInvoice. 
 */
class GetInvoiceDetailsResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The requested invoice. 
	 * @access public
	 * @var InvoiceType
	 */ 
	public $invoice;

	/**
	 * The requested invoice details. 
	 * @access public
	 * @var InvoiceDetailsType
	 */ 
	public $invoiceDetails;

	/**
	 * The requested invoice payment details. 
	 * @access public
	 * @var PaymentDetailsType
	 */ 
	public $paymentDetails;

	/**
	 * The requested invoice refund details. 
	 * @access public
	 * @var PaymentRefundDetailsType
	 */ 
	public $refundDetails;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "invoice.")) {
				$newPrefix = $prefix . "invoice.";
				$this->invoice = new InvoiceType();
				$this->invoice->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "invoiceDetails.")) {
				$newPrefix = $prefix . "invoiceDetails.";
				$this->invoiceDetails = new InvoiceDetailsType();
				$this->invoiceDetails->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "paymentDetails.")) {
				$newPrefix = $prefix . "paymentDetails.";
				$this->paymentDetails = new PaymentDetailsType();
				$this->paymentDetails->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "refundDetails.")) {
				$newPrefix = $prefix . "refundDetails.";
				$this->refundDetails = new PaymentRefundDetailsType();
				$this->refundDetails->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for CancelInvoice. 
 */
class CancelInvoiceRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * invoice's ID 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * Subject of the cancellation notification 
	 * @access public
	 * @var string
	 */ 
	public $subject;

	/**
	 * Note to send payer within the cancellation notification 
	 * @access public
	 * @var string
	 */ 
	public $noteForPayer;

	/**
	 * send a copy of cancellation notification to merchant 
	 * @access public
	 * @var boolean
	 */ 
	public $sendCopyToMerchant;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL) {
		$this->requestEnvelope = $requestEnvelope;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoiceID != NULL) {
			$str .= $delim .  $prefix . 'invoiceID=' . urlencode($this->invoiceID);
			$delim = '&';
		}
		if($this->subject != NULL) {
			$str .= $delim .  $prefix . 'subject=' . urlencode($this->subject);
			$delim = '&';
		}
		if($this->noteForPayer != NULL) {
			$str .= $delim .  $prefix . 'noteForPayer=' . urlencode($this->noteForPayer);
			$delim = '&';
		}
		if($this->sendCopyToMerchant != NULL) {
			$str .= $delim .  $prefix . 'sendCopyToMerchant=' . urlencode($this->sendCopyToMerchant);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for CancelInvoice. 
 */
class CancelInvoiceResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The canceled invoice's ID. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The canceled invoice's number. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceNumber;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceNumber';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for SearchInvoices. 
 */
class SearchInvoicesRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Invoice creator's email. 
	 * @access public
	 * @var string
	 */ 
	public $merchantEmail;

	/**
	 * Parameters constraining the search. 
	 * @access public
	 * @var SearchParametersType
	 */ 
	public $parameters;

	/**
	 * Page number of result set, starting with 1. 
	 * @access public
	 * @var integer
	 */ 
	public $page;

	/**
	 * Number of results per page, between 1 and 100. 
	 * @access public
	 * @var integer
	 */ 
	public $pageSize;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $merchantEmail = NULL, $parameters = NULL, $page = NULL, $pageSize = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->merchantEmail = $merchantEmail;
		$this->parameters = $parameters;
		$this->page = $page;
		$this->pageSize = $pageSize;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->merchantEmail != NULL) {
			$str .= $delim .  $prefix . 'merchantEmail=' . urlencode($this->merchantEmail);
			$delim = '&';
		}
		if($this->parameters != NULL) {
			$newPrefix = $prefix . 'parameters.';
			$str .= $delim . call_user_func(array($this->parameters, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->page != NULL) {
			$str .= $delim .  $prefix . 'page=' . urlencode($this->page);
			$delim = '&';
		}
		if($this->pageSize != NULL) {
			$str .= $delim .  $prefix . 'pageSize=' . urlencode($this->pageSize);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for SearchInvoices. 
 */
class SearchInvoicesResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Number of invoices that matched the search. 
	 * @access public
	 * @var integer
	 */ 
	public $count;

	/**
	 * Page of invoice summaries that matched the search. 
	 * @access public
	 * @var InvoiceSummaryListType
	 */ 
	public $invoiceList;

	/**
	 * Page number of result set. 
	 * @access public
	 * @var integer
	 */ 
	public $page;

	/**
	 * True if another page of invoice summary results exists. 
	 * @access public
	 * @var boolean
	 */ 
	public $hasNextPage;

	/**
	 * True if a previous page of invoice summary results exists. 
	 * @access public
	 * @var boolean
	 */ 
	public $hasPreviousPage;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'count';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->count = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "invoiceList.")) {
				$newPrefix = $prefix . "invoiceList.";
				$this->invoiceList = new InvoiceSummaryListType();
				$this->invoiceList->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'page';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->page = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'hasNextPage';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->hasNextPage = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'hasPreviousPage';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->hasPreviousPage = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for MarkInvoiceAsPaid. 
 */
class MarkInvoiceAsPaidRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to mark as paid. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * Details of the payment made against this invoice. 
	 * @access public
	 * @var OtherPaymentDetailsType
	 */ 
	public $payment;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL, $payment = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
		$this->payment = $payment;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoiceID != NULL) {
			$str .= $delim .  $prefix . 'invoiceID=' . urlencode($this->invoiceID);
			$delim = '&';
		}
		if($this->payment != NULL) {
			$newPrefix = $prefix . 'payment.';
			$str .= $delim . call_user_func(array($this->payment, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for MarkInvoiceAsPaid. 
 */
class MarkInvoiceAsPaidResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The paid invoice ID. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The paid invoice number. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceNumber;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceNumber';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for MarkInvoiceAsRefunded. 
 */
class MarkInvoiceAsRefundedRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to mark as refunded. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * Details of the refund made against this invoice. 
	 * @access public
	 * @var OtherPaymentRefundDetailsType
	 */ 
	public $refundDetail;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL, $refundDetail = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
		$this->refundDetail = $refundDetail;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoiceID != NULL) {
			$str .= $delim .  $prefix . 'invoiceID=' . urlencode($this->invoiceID);
			$delim = '&';
		}
		if($this->refundDetail != NULL) {
			$newPrefix = $prefix . 'refundDetail.';
			$str .= $delim . call_user_func(array($this->refundDetail, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for MarkInvoiceAsRefunded. 
 */
class MarkInvoiceAsRefundedResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The invoice ID of the invoice that was marked as refunded. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The invoice number of the invoice that was marked as
	 * refunded. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceNumber;

	/**
	 * The URL of the details page of the invoice that was marked
	 * as refunded. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceNumber';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request object for MarkInvoiceAsUnpaid. 
 */
class MarkInvoiceAsUnpaidRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * ID of the invoice to mark as unpaid. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $invoiceID = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->invoiceID = $invoiceID;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->invoiceID != NULL) {
			$str .= $delim .  $prefix . 'invoiceID=' . urlencode($this->invoiceID);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * The response object for MarkInvoiceAsUnpaid. 
 */
class MarkInvoiceAsUnpaidResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * The invoice ID of the invoice that was marked as unpaid. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceID;

	/**
	 * The invoice number of the invoice that was marked as unpaid.
	 * 
	 * @access public
	 * @var string
	 */ 
	public $invoiceNumber;

	/**
	 * The URL of the details page of the invoice that was marked
	 * as unpaid. 
	 * @access public
	 * @var string
	 */ 
	public $invoiceURL;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'invoiceID';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceID = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceNumber';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->invoiceURL = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Payment refund details about the invoice.  
 */
class PaymentRefundDetailsType  {

	/**
	 * True if the invoice was refunded using PayPal.  
	 * @access public
	 * @var boolean
	 */ 
	public $viaPayPal;

	/**
	 * Other payment refund details.  
	 * @access public
	 * @var PayPalPaymentRefundDetailsType
	 */ 
	public $paypalPayment;

	/**
	 * details.  
	 * @access public
	 * @var OtherPaymentRefundDetailsType
	 */ 
	public $otherPayment;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'viaPayPal';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->viaPayPal = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "paypalPayment.")) {
				$newPrefix = $prefix . "paypalPayment.";
				$this->paypalPayment = new PayPalPaymentRefundDetailsType();
				$this->paypalPayment->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "otherPayment.")) {
				$newPrefix = $prefix . "otherPayment.";
				$this->otherPayment = new OtherPaymentRefundDetailsType();
				$this->otherPayment->init($map, $newPrefix);
			}
			
		}
	}
} 




?>