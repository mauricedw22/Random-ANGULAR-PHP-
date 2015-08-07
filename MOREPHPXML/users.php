<?php

$xmldoc = new DOMDocument();
$xmldoc->load('users.xml');

$xmlobj = simplexml_import_dom($xmldoc);

foreach($xmlobj->user as $user){
	
	echo $user->email . "<br />" . $user->phoneNumber . "<br /><br />";
	
}





?>