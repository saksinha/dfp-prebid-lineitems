<?php

putenv('HOME='.dirname(__DIR__)."/../");
require __DIR__.'/../../vendor/autoload.php';

require __DIR__.'/../../customerConfigSample.php';


use App\Scripts\HeaderBiddingScript;

$applicationName = "dfp21684858599-dhaka";
$jsonKeyFilePath = "./googleServiceAccount.json";
$scopes = "https://www.googleapis.com/auth/dfp";
$impersonatedEmail = "api-service@dfp21684858599.iam.gserviceaccount.com";


$credentials = array(
	"networkCode" => "21684858599",
	"applicationName" => "dfp21684858599-dhaka",
	"jsonKeyFilePath" => "./googleServiceAccount.json",
	"impersonatedEmail" => "api-service@dfp21684858599.iam.gserviceaccount.com",
	"scopes" => "https://www.googleapis.com/auth/dfp"
);


$script = new HeaderBiddingScript();

$script->setCredentials($credentials)
	->createAdUnits($entry)
	->clearCredentials();

