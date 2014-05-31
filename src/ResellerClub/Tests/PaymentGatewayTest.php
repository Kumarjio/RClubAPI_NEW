<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class PaymentGatewayTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function customerList() {


$value=$this->apicaller->paymentgateway()->customerList(array('customer-id'=>'11178171',
                                                       'payment-type'=>'AddFund',    
                                                                      
));
echo"<pre>";
print_r ($value);
echo"</pre>";

}

public function resellerList() {


$value=$this->apicaller->paymentgateway()->resellerList(array());
echo"<pre>";
print_r ($value);
echo"</pre>";

}

public function customerTransaction() {


$value=$this->apicaller->paymentgateway()->customerTransaction(array('payment-type-id'=>'1','transaction-type'=>'addfund',
                                                               'no-of-records'=>'20','page-no'=>'1'
                                                           
                                                                      
));
echo"<pre>";
print_r ($value);
echo"</pre>";

}



}
