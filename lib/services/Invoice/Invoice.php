<?php
 /**
  * Stub objects for Invoice 
  * Auto generated code 
  * 
  */
/**
 * 
 */
if(!class_exists('BaseAddress', false)) {
class BaseAddress  
  extends PPMessage   {

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


}
}



/**
 * This type contains the detailed error information resulting
 * from the service operation. 
 */
if(!class_exists('ErrorData', false)) {
class ErrorData  
  extends PPMessage   {

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
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $severity;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
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


}
}



/**
 * @hasAttribute
 * 
 */
if(!class_exists('ErrorParameter', false)) {
class ErrorParameter  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 
	 * @value
	 	 	 	 
	 * @var string 	 
	 */ 
	public $value;


}
}



/**
 * This specifies a fault, encapsulating error data, with
 * specific error codes. 
 */
if(!class_exists('FaultMessage', false)) {
class FaultMessage  
  extends PPMessage   {

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


}
}



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
if(!class_exists('RequestEnvelope', false)) {
class RequestEnvelope  
  extends PPMessage   {

	/**
	 * This specifies the required detail level that is needed by a
	 * client application pertaining to a particular data component
	 * (e.g., Item, Transaction, etc.). The detail level is
	 * specified in the DetailLevelCodeType which has all the
	 * enumerated values of the detail level for each component. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
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


}
}



/**
 * This specifies a list of parameters with every response from
 * a service. 
 */
if(!class_exists('ResponseEnvelope', false)) {
class ResponseEnvelope  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgment code. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
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


}
}



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


}



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



/**
 * A list of invoice items. 
 */
class InvoiceItemListType  
  extends PPMessage   {

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


}



/**
 * Invoice details about the merchant, payer, totals and terms.
 * 
 */
class InvoiceType  
  extends PPMessage   {

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
	 
	 	 	 	 
	 * @var string 	 
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


}



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



/**
 * Details of the refund made against this invoice. 
 */
class OtherPaymentRefundDetailsType  
  extends PPMessage   {

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


}



/**
 * Details of the paypal refund made against this invoice. 
 */
class PayPalPaymentRefundDetailsType  
  extends PPMessage   {

	/**
	 * Date when the invoice was marked as refunded by PayPal. 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $date;


}



/**
 * PayPal payment details about the invoice. 
 */
class PayPalPaymentDetailsType  
  extends PPMessage   {

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


}



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



/**
 * Payment details about the invoice. 
 */
class PaymentDetailsType  
  extends PPMessage   {

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


}



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


}



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
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $referrerCode;


}



/**
 * A list of invoice summaries. 
 */
class InvoiceSummaryListType  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var InvoiceSummaryType 	 
	 */ 
	public $invoice;


}



/**
 * The request object for CreateInvoice. 
 */
class CreateInvoiceRequest  
  extends PPMessage   {

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


}



/**
 * The response object for CreateInvoice. 
 */
class CreateInvoiceResponse  
  extends PPMessage   {

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


}



/**
 * The request object for SendInvoice. 
 */
class SendInvoiceRequest  
  extends PPMessage   {

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


}



/**
 * The response object for SendInvoice. 
 */
class SendInvoiceResponse  
  extends PPMessage   {

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


}



/**
 * The request object for CreateAndSendInvoice. 
 */
class CreateAndSendInvoiceRequest  
  extends PPMessage   {

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


}



/**
 * The response object for CreateAndSendInvoice. 
 */
class CreateAndSendInvoiceResponse  
  extends PPMessage   {

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


}



/**
 * The request object for UpdateInvoice. 
 */
class UpdateInvoiceRequest  
  extends PPMessage   {

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


}



/**
 * The response object for UpdateInvoice. 
 */
class UpdateInvoiceResponse  
  extends PPMessage   {

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


}



/**
 * The request object for GetInvoiceDetails. 
 */
class GetInvoiceDetailsRequest  
  extends PPMessage   {

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


}



/**
 * The response object for CreateInvoice. 
 */
class GetInvoiceDetailsResponse  
  extends PPMessage   {

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


}



/**
 * The request object for CancelInvoice. 
 */
class CancelInvoiceRequest  
  extends PPMessage   {

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


}



/**
 * The response object for CancelInvoice. 
 */
class CancelInvoiceResponse  
  extends PPMessage   {

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


}



/**
 * The request object for SearchInvoices. 
 */
class SearchInvoicesRequest  
  extends PPMessage   {

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


}



/**
 * The response object for SearchInvoices. 
 */
class SearchInvoicesResponse  
  extends PPMessage   {

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


}



/**
 * The request object for MarkInvoiceAsPaid. 
 */
class MarkInvoiceAsPaidRequest  
  extends PPMessage   {

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


}



/**
 * The response object for MarkInvoiceAsPaid. 
 */
class MarkInvoiceAsPaidResponse  
  extends PPMessage   {

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


}



/**
 * The request object for MarkInvoiceAsRefunded. 
 */
class MarkInvoiceAsRefundedRequest  
  extends PPMessage   {

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


}



/**
 * The response object for MarkInvoiceAsRefunded. 
 */
class MarkInvoiceAsRefundedResponse  
  extends PPMessage   {

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


}



/**
 * The request object for MarkInvoiceAsUnpaid. 
 */
class MarkInvoiceAsUnpaidRequest  
  extends PPMessage   {

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


}



/**
 * The response object for MarkInvoiceAsUnpaid. 
 */
class MarkInvoiceAsUnpaidResponse  
  extends PPMessage   {

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


}



/**
 * Payment refund details about the invoice.  
 */
class PaymentRefundDetailsType  
  extends PPMessage   {

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


}



