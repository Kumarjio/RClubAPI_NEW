<?php

include("vendor/autoloader.php");

use ResellerClub\Tests\ESMDomainTest as RClubAPI;

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

//$apicaller->isOwnershipVerified() ;
//$apicaller->addDomainAlias() ;
//$apicaller->deleteDomainAlias() ;
//$apicaller->getNotificationEmail() ;
//$apicaller->modifyNotificationEmail() ;
//$apicaller->getCatchAllAcount() ;
//$apicaller->activateCatchAllAcount() ;
//$apicaller->deactivateCatchAllAcount() ;
$apicaller->getDNSRecords() ;
