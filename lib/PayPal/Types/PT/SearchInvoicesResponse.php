<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The response object for SearchInvoices. 
 */
class SearchInvoicesResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ResponseEnvelope	 
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
	 
	 	 	 	 
	 * @var PayPal\Types\PT\InvoiceSummaryListType	 
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
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ErrorData	 
	 */ 
	public $error;


}
