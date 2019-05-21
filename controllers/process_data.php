<?php 

//Getting the data
$option = $_POST['option'];
$items = explode("\n",$_POST['items']);
$quality = $_POST['quality'];
$craftable = $_POST['craftable'];
$australium = $_POST['australim'];
$killstreak = $_POST['killstreak'];
$effects = $_POST['effects'];
$intent = $_POST['intent'];
$limit = $_POST['limit'];

//Prices (Optional Data)
$sell_keys = $_POST['sell_keys'];
$sell_metal = $_POST['sell_metal'];
$buy_keys = $_POST['buy_keys'];
$buy_metal = $_POST['buy_metal'];

$output;


/*
 * Still need to manage how to update the output without reloading the page 
 * Also need to give a look of how im going to organize the variables values
 */

 for($i = 0; i < sizeof($items); $i++){
    ;
 }





