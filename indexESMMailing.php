<?php

include("vendor/autoloader.php");

use ResellerClub\Tests\ESMMailingListTest as RClubAPI;

//$apihost = "https://test.httpapi.com/api/";
//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate

//Ajay's  Account API key details
$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";


$apicaller = new RClubAPI($apihost, $authid,$apikey);

//ESMMailing Test=>

//$apicaller->addMailingList() ;
//$apicaller->modifyMailingList() ;
//$apicaller->getMailingListDomain() ;
//$apicaller->getDetails() ;
//$apicaller->addSubscribers() ;
//$apicaller->listSubscribers() ;
//$apicaller->deleteSubscribers() ;
//$apicaller->deleteMailingList() ;
//$apicaller->addModerators() ;
$apicaller->deleteModerators() ;

