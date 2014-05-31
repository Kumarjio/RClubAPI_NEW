<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class ActionsTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function searchCurrent() {


$search_current=$this->apicaller->actions()->searchCurrent(array('no-of-records'=>'20','page-no'=>'1'
                                                           
                                                                      
));
echo"<pre>";
print_r ($search_current);
echo"</pre>";

}

public function searchArchived() {


$search_archived=$this->apicaller->actions()->searchArchived(array('no-of-records'=>'2','page-no'=>'1'
                                                           
                                                                      
));
echo"<pre>";
print_r ($search_archived);
echo"</pre>";

}



}
