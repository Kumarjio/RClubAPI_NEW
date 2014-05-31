<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class GeneralTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function currency() {


$currency=$this->apicaller->general()->currency(array());
echo"<pre>";
print_r ($currency);
echo"</pre>";

}

public function country() {


$country=$his->apicaller->general()->country(array());
echo"<pre>";
print_r ($country);
echo"</pre>";

}

public function state() {


$state=$this->apicaller->general()->state(array('country-code'=>'IN'));
echo"<pre>";
print_r ($state);
echo"</pre>";
}



}
