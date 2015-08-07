<?php

$json = file_get_contents('man.json');
$jsonArr = json_decode($json, true);

echo $jsonArr['BetterMan']['BetterMan1']['name']." age ".$jsonArr['BetterMan']['BetterMan1']['age']."<br /><br />";

echo "His romantic goal is ....  " . $jsonArr['BetterMan']['BetterMan1']['goal']; 

echo '<br /><br />'. 'Main problem: '.$jsonArr['BetterMan']['BetterMan1']['Problems']['mainProblem'];

$moreJSON = file_get_contents('../AJAX/employ.json');
$jsonArr2  = json_decode($moreJSON, true);

$jsonData[] = '{"employeeID":"003","firstName":"Charles","lastName":"Mars","position":"Server"}';

array_push($jsonArr2,$jsonData);

$newJSON = json_encode($jsonArr2);

file_put_contents('results2.json',$newJSON);

echo '<br /><br />'.$jsonArr2['employees'][1]['firstName']." ".$jsonArr2['employees'][1]['lastName'];
 
?>