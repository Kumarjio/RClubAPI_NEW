<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class PricingTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function customerPrice() {


$customer_price=$this->apicaller->pricing()->customerPrice(array('customer-id'=>'11181135'));
echo"<pre>";
print_r ($customer_price);
echo"</pre>";
}

public function resellerPrice() {


$reseller_price=$this->apicaller->pricing()->resellerPrice(array ());
echo"<pre>";
print_r($reseller_price);
echo"</pre>";

}

public function resellerCostPrice() {


$reseller_cost_price=$this->apicaller->pricing()->resellerCostPrice(array ());
echo"<pre>";
print_r($reseller_cost_price);
echo"</pre>";

}



}
