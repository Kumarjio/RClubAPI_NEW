<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class LegalAgreementTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function agreement() {


$value=$this->apicaller->legalagreementdata()->agreement(array('type'=>'resellermasteragreement'
                                                           
                                                                      
));
echo"<pre>";
print_r ($value);
echo"</pre>";

}


}
