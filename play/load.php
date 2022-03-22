<?php
$id = $_GET['id'];
$ids = $_GET['id_sourat'];
$url="https://api.quran.com/api/v4/chapter_recitations/$id/$ids";
$json = file_get_contents($url);
$data_audio = json_decode($json, TRUE);
$data_audio = $data_audio['audio_file'];

?>