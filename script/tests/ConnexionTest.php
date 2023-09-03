<?php

putenv('HOME='.dirname(__DIR__)."/../");
require __DIR__.'/../../vendor/autoload.php';

// require __DIR__.'/../../customerConfig/234.php';


$applicationName = "dfp21684858599-dhaka";
$jsonKeyFilePath = "/home/gabriel/dfp/googleServiceAccount.json";
$scopes = "https://www.googleapis.com/auth/dfp";
$impersonatedEmail = "";

$credentials = array(
	"networkCode" => "21684858599",
	"applicationName" => "dfp21684858599-dhaka",
	"jsonKeyFilePath" => "./googleServiceAccount.json",
	"impersonatedEmail" => "api-service@dfp21684858599.iam.gserviceaccount.com",
	"scopes" => "https://www.googleapis.com/auth/dfp"
);

$foo = new App\Scripts\AdsApiGenerator;
$foo->setCredentials($credentials)
	->generateAdsApi();


$traffickerId = (new \App\AdManager\UserManager())->getUserId();

$foo->deleteAdsApi();

if (is_numeric($traffickerId)) {
	echo "\n====Connexion OK====\n\n";
} else {
	echo "\n===Connexion KO====\n\n";
}
