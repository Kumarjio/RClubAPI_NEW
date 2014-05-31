<?php
namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class CustomerTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function createAccount() {


$customer_reg = $this->apicaller->customer()->createAccount(array (
					'username' => 'mrinmoy.mukherjee@netfunda.com',
					'passwd' => 'Mrinmoy123',
					'name' => 'Mrinmoy Mukherjee',
					'company' => 'Netfunda Technologies',
					'address-line-1' => 'Mamura',
					'address-line-2' => 'Sector 66',
					'city' => 'Noida',
					'state' => '1741',
					'country' => 'IN',
					'zipcode' => '201301',
					'phone-cc' => '91',
					'phone' => '8527808137',
					'lang-pref' => 'en'
));
echo $customer_reg;

}

public function modifyCustomer() {


$customer_mod = $this->apicaller->customer()->modifyCustomer(array (
					'customer-id' => '11181135',
					'username' => 'mrinmoy.mukherjee@netfunda.com',
					'name' => 'Mrinmoy Mukherjee',
					'company' => 'Netfunda Technologies',
					'address-line-1' => 'B88',
					'address-line-2' => 'Sector 64',
					'city' => 'Noida',
					'state' => 'UP',
					'country' => 'IN',
					'zipcode' => '201301',
					'phone-cc' => '91',
					'phone' => '9876543210',
					'lang-pref' => 'en'
));
echo $customer_mod; 

}

public function fetchCustomerByUserName() {


$customer_by_username=$this->apicaller->customer()->fetchCustomerByUserName(array (
                                              'username' => 'mrinmoy.mukherjee@netfunda.com'));
echo"<pre>";
print_r($customer_by_username);
echo"</pre>";

}

public function fetchCustomerById() {


$customer_by_id=$this->apicaller->customer()->fetchCustomerById(array (
                                              'customer-id' => '11181135'));
echo"<pre>";
print_r($customer_by_id);
echo"</pre>";
}

public function tokenGenerate() {


$generate_token=$this->apicaller->customer()->tokenGenerate(array (
                                              'username' => 'mrinmoy.mukherjee@netfunda.com',
                                              'passwd' => 'Mrinmoy123',
                                               'ip' => '192.168.1.13'
    ));
echo"<pre>";
echo "$generate_token";
echo"</pre>";

}

public function authenticateToken() {


$authenticate_token=$this->apicaller->customer()->authenticateToken(array (
                                              'token' => '06zIRepD',
                                              
    ));
echo"<pre>";
echo "$authenticate_token";
echo"</pre>";

}


public function changePassword() {


$change_password=$this->apicaller->customer()->changePassword(array (
                                              'customer-id' => '11181135',
                                              'new-passwd' => 'Mri123456',
                                              
    ));
echo"<pre>";
echo "$change_password";
echo"</pre>";
}

public function tempPassword() {


$temp_password=$this->apicaller->customer()->tempPassword(array (
                                              'customer-id' => '11181135'
                                              
                                              
    ));
echo"<pre>";
echo "$temp_password";
echo"</pre>";

}


public function searchCustomer() {


$search_customer=$this->apicaller->customer()->searchCustomer(array (
                                              'no-of-records' => '10',
                                               'page-no' => '1'
                                              
                                              
    ));
echo"<pre>";
echo "$search_customer";
echo"</pre>";

}

public function deleteCustomer() {


$delete_customer=$this->apicaller->customer()->deleteCustomer(array (
                                              'customer-id' => '11180284'
                                              
                                              
                                              
    ));
echo"<pre>";
echo "$delete_customer";
echo"</pre>";

}




}
