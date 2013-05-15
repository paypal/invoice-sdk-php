<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The request object for SearchInvoices. 
 */
class SearchInvoicesRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
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
	 
	 	 	 	 
	 * @var PayPal\Types\PT\SearchParametersType	 
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
