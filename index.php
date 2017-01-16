<?php
if($_GET['tag'] && $_GET['limit']){
$tag = $_GET['tag'];
$limit = $_GET['limit'];
$url ="http://www.9lessons.info/feeds/posts/default/-/".$tag."?max-results=".$limit."&alt=json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 12); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close ($ch);
echo $result;
}
?>
