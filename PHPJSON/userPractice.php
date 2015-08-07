<?php

//Setting Time Zone 
date_default_timezone_set('America/New_York');

class user{

  public $name = '';
  public $phone = '';
  public $email = '';
  public $login_date = '';

}

$newbie = new user();

$newbie->name = 'Maurice Walker II';
$newbie->phone = '2402053959';
$newbie->email = 'mauricedw22@gmail.com';
$newbie->login_date = date('m/d/Y h:i:s a');

$newJSON = json_encode($newbie);
$jsonObjectToPHP = json_decode($newJSON);

//Outputs JSON data from PHP class instance
echo json_encode($newbie) . '<br />';

//Outputs a PHP object using JSON data
echo var_dump(json_decode($newJSON)).'<br />';

//Outputs a PHP array object using JSON data
echo var_dump(json_decode($newJSON,true));

//Outputs name of PHP Object turned from JSON data which was converted from PHP class instance!!!
echo '<br />'.$jsonObjectToPHP->name.'<br /><br />';
echo 'Joined '.$jsonObjectToPHP->login_date.'<br />';

//USING ARRAYS	

$arr = array('name'=>'Maurice','phone'=>'2402053959','email'=>'mauricedw22@gmail');

echo '<br />' . json_encode($arr);

?>