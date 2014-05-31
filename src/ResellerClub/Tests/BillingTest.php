<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class BillingTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function transactionDetails() {


$transaction_details=$this->apicaller->billing()->transactionDetails(array('transaction-ids'=>'43491977'
                                                                      
    ));
echo"<pre>";
print_r ($transaction_details);
echo"</pre>";

}

public function transactionDetailsSubReseller() {


$transaction_details_subreseller=$this->apicaller->billing()->transactionDetailsSubReseller(array('transaction-ids'=>'61386715'
                                                                      
    ));
echo"<pre>";
print_r ($transaction_details_subreseller);
echo"</pre>";

}

public function greedyTransactionDetails() {


$search_current=$this->apicaller->actions()->greedyTransactionDetails(array('no-of-records'=>'20','page-no'=>'1'
                                                           
                                                                      
));
echo"<pre>";
print_r ($search_current);
echo"</pre>";

}

public function greedyTransactionDetailsSubReseller() {


$greedy_transaction_details_subreseller=$this->apicaller->billing()->greedyTransactionDetailsSubReseller(array('reseller-id'=>'527945'
                                                                      
    ));
echo"<pre>";
print_r ($greedy_transaction_details_subreseller);
echo"</pre>";

}

public function payCustomer() {


$pay_customer=$this->apicaller->billing()->payCustomer(array('invoice-ids'=>'43496951'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function customerAvailableBalance() {


$customer_available_balance=$this->apicaller->billing()->customerAvailableBalance(array('customer-id'=>'11178171'
                                                                      
));
echo"<pre>";
print_r ($customer_available_balance);
echo"</pre>";

}

public function orderWithoutPayment() {


$owp=$this->apicaller->billing()->orderWithoutPayment(array('invoice-ids'=>'43496951','cancel-invoice'=>'true'
                                                                      
));
echo"<pre>";
print_r ($owp);
echo"</pre>";

}

public function searchTransactionCustomer() {


$customer_transaction=$this->apicaller->billing()->searchTransactionCustomer(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($customer_transaction);
echo"</pre>";

}

public function searchTransactionSubReseller() {


$subreseller_transaction=$this->apicaller->billing()->searchTransactionSubReseller(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($subreseller_transaction);
echo"</pre>";

}

public function searchArchivedTransactionSubReseller() {


$pay_customer=$this->apicaller->billing()->searchArchivedTransactionSubReseller(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function searchArchivedTransactionCustomer() {


$pay_customer=$this->apicaller->billing()->searchArchivedTransactionCustomer(array('no-of-records'=>'10','page-no'=>'1'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function subresellerAvailableBalance() {


$pay_customer=$this->apicaller->billing()->subresellerAvailableBalance(array('reseller-id'=>'529303'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function addFundCustomer() {


$pay_customer=$this->apicaller->billing()->addFundCustomer(array('customer-id'=>'11178171','amount'=>'2000',
                                                           'description'=>'New Amount','transaction-type'=>'credit',
                                                           'transaction-key'=>'10cc','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function addFundSubReseller() {


$pay_customer=$this->apicaller->billing()->addFundSubReseller(array('reseller-id'=>'529303','amount'=>'2000',
                                                           'description'=>'New Amount','transaction-type'=>'credit',
                                                           'transaction-key'=>'10cc','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function addDebtNoteCustomer() {

$pay_customer=$this->apicaller->billing()->addDebtNoteCustomer(array('customer-id'=>'11178171','selling-amount'=>'20000',
                                                           'description'=>'New Amount','debit-note-date'=>'20140521',
                                                           'transaction-key'=>'10cc45','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function addDebtNoteSubReseller() {


$pay_customer=$this->apicaller->billing()->addDebtNoteSubReseller(array('reseller-id'=>'529303','selling-amount'=>'20000',
                                                           'description'=>'New Amount','debit-note-date'=>'20140521',
                                                           'transaction-key'=>'10cc45','update-total-receipt'=>'true'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";
}

public function addMisInvoiceCustomer() {


$pay_customer=$this->apicaller->billing()->addMisInvoiceCustomer(array('order-id'=>'54761757','customer-id'=>'10704470',
                                                           'selling-amount'=>'15000','description'=>'New Amount',
                                                           'invoice-date'=>'20140521','transaction-key'=>'00cv55'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}

public function addMisInvoiceSubReseller() {


$pay_customer=$this->apicaller->billing()->addMisInvoiceSubReseller(array('order-id'=>'123456','reseller-id'=>'529303',
                                                           'selling-amount'=>'15000','description'=>'New Amount',
                                                           'invoice-date'=>'20140521','transaction-key'=>'00cv556','invoice-due-date'=>'20140530',
                                                           'invoice-deletion-date'=>'20140531'
                                                                      
));
echo"<pre>";
print_r ($pay_customer);
echo"</pre>";

}



}
