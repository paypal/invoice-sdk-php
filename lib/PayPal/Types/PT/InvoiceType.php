<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
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
	 
	 	 	 	 
	 * @var PayPal\Types\PT\BusinessInfoType	 
	 */ 
	public $merchantInfo;

	/**
	 * List of items included in this invoice. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceItemListType	 
	 */ 
	public $itemList;

	/**
	 * If True, indicates tax calculated after discount. Default is
	 * False.
	 * @access public
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $taxCalculatedAfterDiscount;

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
	 * If true, indicates tax included in item amount. If present,
	 * this setting will supersede the merchant’s default
	 * setting. 
	 * @access public
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $taxInclusive;

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
	 * Details of the receipt. Applicable only when invoice is a
	 * receipt. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $receiptDetails;

	/**
	 * Billing information for the payer. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\BusinessInfoType	 
	 */ 
	public $billingInfo;

	/**
	 * Shipping information for the payer. 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\PT\BusinessInfoType	 
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
	 
	 	 	 	 
	 * @var PayPal\Types\Common\string	 
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
	public function __construct($merchantEmail = NULL, $payerEmail = NULL, $itemList = NULL, $currencyCode = NULL) {
		$this->merchantEmail = $merchantEmail;
		$this->payerEmail = $payerEmail;
		$this->itemList = $itemList;
		$this->currencyCode = $currencyCode;
	}


}
