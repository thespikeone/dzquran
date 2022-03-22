<?php
$url="https://api.quran.com/api/v4/chapters?language=ar";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
//var_dump($data);
//var_dump($data['chapters'][0]);

?>