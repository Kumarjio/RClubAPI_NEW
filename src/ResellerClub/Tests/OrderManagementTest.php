<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class OrderManagementTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function suspend() {


$suspend=$this->apicaller->ordermanagement()->suspend(array('order-id'=>'54761757','reason'=>'More Funds is needed',
                                                           
                                                                      
));
echo"<pre>";
print_r ($suspend);
echo"</pre>";

}

public function Unsuspend() {


$unsuspend=$this->apicaller->ordermanagement()->Unsuspend(array('order-id'=>'54761757'
                                                           
                                                                      
));
echo"<pre>";
print_r ($unsuspend);
echo"</pre>";

}



}
