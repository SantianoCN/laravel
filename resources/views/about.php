<?php 
$arr = array();
foreach (array_keys($_SERVER) as $key){
    $arr[] = $key;
}
dump($arr);
