<?php

include("vendor/autoloader.php");

use ResellerClub\Tests\VPSLinuxPlansTest as RClubAPI;

//$apihost = "https://test.httpapi.com/api/";
//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate

//Ajay's  Account API key details
$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";


$apicaller = new RClubAPI($apihost, $authid,$apikey);

//VPSLinux Plans=>

//$apicaller->add() ;
//$apicaller->renew() ;
//$apicaller->modify() ;
//$apicaller->addAddOn() ;
//$apicaller->deleteAddOn() ;
//$apicaller->suspend() ;
//$apicaller->unsuspend() ;
//$apicaller->delete() ;
//$apicaller->getDetails() ;
//$apicaller->getPlanDetails() ;
//$apicaller->getOrderId() ;
//$apicaller->searchOrders() ;
//$apicaller->modifyPrice() ;
//$apicaller->getCustomerPricing() ;
$apicaller->getResellerPricing() ;

