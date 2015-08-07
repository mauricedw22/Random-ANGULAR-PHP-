<?php

require('dbConnectToAngularUsers.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

    $sql= "SELECT * FROM angularUsers";
			
		$result= mysql_query($sql);
			
		$con= mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD);
		
	$outp = "";
	  
    while($row= mysql_fetch_array($result)){
		   
	   if ($outp != "") {$outp .= ",";}
		   
    $outp .= '{"Name":"'  . $row["name"] . '",';
    $outp .= '"Email":"'   . $row["email"]        . '",';
    $outp .= '"Phone Number":"'. $row["phoneNumber"]     . '"}';		   
          	   
        }
			
	$outp ='{"records":['.$outp.']}';
	mysql_close($con);

	echo($outp);
	
	file_put_contents('data2.json',$outp);
			
			
?>