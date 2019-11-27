<?php
include('helpers/StoreHelper.php');


$storeHelper = new StoreHelper();
$lines = $storeHelper->linesAsArray();
$lines = array_reverse($lines);
$clearLine = $storeHelper->clear();
foreach ($lines as $line){
    $storeHelper->storeNewLine($line);
}


header('location: index.php');