<?php

include("vendor/autoloader.php");

use ResellerClub\Tests\BillingTest as RClubAPI;

//$apihost = "https://test.httpapi.com/api/";
//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate

//Ajay's  Account API key details
$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";


$apicaller = new RClubAPI($apihost, $authid,$apikey);

//Billing Test=>

//$apicaller->transactionDetails() ;
//$apicaller->transactionDetailsSubReseller() ;
//$apicaller->greedyTransactionDetails() ;
//$apicaller->greedyTransactionDetailsSubReseller() ;
//$apicaller->payCustomer() ;
//$apicaller->customerAvailableBalance() ;
//$apicaller->orderWithoutPayment() ;
//$apicaller->searchTransactionCustomer() ;
//$apicaller->searchTransactionSubReseller() ;
//$apicaller->searchArchivedTransactionSubReseller() ;
//$apicaller->searchArchivedTransactionCustomer() ;
//$apicaller->subresellerAvailableBalance() ;
//$apicaller->addFundCustomer() ;
//$apicaller->addFundSubReseller() ;
//$apicaller->addDebtNoteCustomer() ;
//$apicaller->addDebtNoteSubReseller() ;
//$apicaller->addMisInvoiceCustomer() ;
//$apicaller->addMisInvoiceSubReseller() ;
