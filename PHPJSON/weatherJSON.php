<?php

$url = 'weather.json';
$content = file_get_contents($url);
$json = json_decode($content, true);

echo $json['data']['weather']['tempMaxF'] ." degrees Fahrenheit <br /><br />";

echo $json['data']['request']['type'].": ".$json['data']['request']['query'];

echo var_dump($json);

/* foreach($json['data']['weather'] as $item) {
    echo $item['tempMaxF'];
    print ' - ';
    print $item['weatherDesc'][0]['value'];
    print ' - ';
    print '<img src="' . $item['weatherIconUrl'][0]['value'] . '" border="0" alt="" />';
    print '<br>';
} */

?>