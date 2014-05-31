<?php

include("vendor/autoloader.php");

use ResellerClub\Tests\CustomerTest as RClubAPI;

//$apihost = "https://test.httpapi.com/api/";
//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate

//Ajay's  Account API key details
$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";


$apicaller = new RClubAPI($apihost, $authid,$apikey);

//ESMDomain Test=>

//$apicaller->createAccount() ;
//$apicaller->modifyCustomer() ;
//$apicaller->fetchCustomerByUserName() ;
//$apicaller->fetchCustomerById() ;
//$apicaller->tokenGenerate() ;
//$apicaller->authenticateToken() ;
//$apicaller->changePassword() ;
//$apicaller->tempPassword() ;
//$apicaller->searchCustomer() ;
$apicaller->deleteCustomer() ;
