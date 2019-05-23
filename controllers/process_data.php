<?php 

//Getting the data
$option = $_POST['option'];
$items = explode("\r\n",$_POST['items']);
$quality = $_POST['quality'];
$craftable = $_POST['craftable'];
$australium = $_POST['australium'];
$killstreak = $_POST['killstreak'];
$effects = $_POST['effects'];
$intent = $_POST['intent'];
$limit = $_POST['limit'];

//Prices (Optional Data)
$autoprice = "&autoprice=true";
$sell_keys = trim($_POST['sell_keys']);
$sell_metal = trim($_POST['sell_metal']);
$buy_keys = trim($_POST['buy_keys']);
$buy_metal = trim($_POST['buy_metal']);

$output;

//Starting to convert commands

//Option
switch($option){
   case "add":
   $option = "!add name=";
   break;

   case "update":
   $option = "!update name=";
   break;

   case "remove":
   $option = "!remove item=";
}

//Quality
switch($quality){
   case "Unique":
   $quality = "&quality=Unique";
   break;

   case "Strange":
   $quality = "&quality=Strange";
   break;

   case "Vintage":
   $quality = "&quality=Vintage";
   break;

   case "Genuine":
   $quality = "&quality=Genuine";
   break;

   case "Haunted":
   $quality = "&quality=Haunted";
   break;

   case "Unusual":
   $quality = "&quality=Unusual";
}

//Craftable
switch($craftable){
   case "true":
   $craftable = "&craftable=true";
   break;

   case "false":
   $craftable = "&craftable=false";
}

//Australium
switch($australium){
   case "false":
   $australium = "&australium=false";
   break;

   case "true":
   $australium = "&australium=true";
}

//Killstreak
switch($killstreak){
   case "0":
   $killstreak = "&killstreak=0";
   break;

   case "1":
   $killstreak = "&killstreak=1";
   break;

   case "2":
   $killstreak = "&killstreak=2";
   break;

   case "3":
   $killstreak = "&killstreak=3";
}

//Effects
if($effects != ""){
   $effects = "&effect=".$effects;
}

//Intent
switch($intent){
   case "bank":
   $intent = "&intent=bank";
   break;

   case "buy":
   $intent = "&intent=buy";
   break;

   case "sell":
   $intent = "&intent=sell";
}

//Limit
if($limit != ""){
   $limit = "&limit=".$limit;
}

/*
 * Filtering the Add option defaults
 */

 if($quality == "&quality=Unique" && $option == "!add name="){
    $quality = "";
 }

 if($craftable == "&craftable=true" && $option == "!add name="){
   $craftable = "";
}

if($australium == "&australium=false" && $option == "!add name="){
   $australium = "";
}

if($killstreak == "&killstreak=0" && $option == "!add name="){
   $killstreak = "";
}

if($intent == "&intent=bank" && $option == "!add name="){
   $intent = "";
}

if($limit == "&limit=1" && $option == "!add name="){
   $limit = "";
}

/*
 * Prices
 */

// Set autopricer
if($sell_keys != "" || $sell_metal != "" || $buy_keys != "" || $buy_metal != ""){
   $autoprice = "&autoprice=false";
}

//Prices
if($sell_keys != "" && $sell_metal != "" && $buy_keys != "" && $buy_metal != "" && $autoprice == "&autoprice=false"){
   $sell_keys = "&sell_keys=".$sell_keys;
   $sell_metal = "&sell_metal=".$sell_metal;
   $buy_keys = "&buy_keys=".$buy_keys;
   $buy_metal = "&buy_metal=".$buy_metal;
} else if($autoprice == "&autoprice=false"){
   echo "Fill the prices correctly!";
   die;
}

/* //Sell Keys
if($sell_keys != ""){
   $sell_keys = "&sell_keys=".$sell_keys;
}

//Sell Metal
if($sell_metal != ""){
   $sell_metal = "&sell_metal=".$sell_metal;
}

//Buy Keys
if($buy_keys != ""){
   $buy_keys = "&buy_keys=".$buy_keys;
}

//Buy Metal
if($buy_metal != ""){
   $buy_metal = "&buy_metal=".$buy_metal;
} */


/*
 *
 * Still need to manage how im going to update the output without reloading the page 
 * Also need to give a look of how im going to organize the variables values
 * 
 */

 //Clean Output
 $output = "";

//Process Items
 foreach($items as $item){
    if($option != "!remove item="){
      if(trim($item) != ""){
      $output = $option.trim($item).$quality.$craftable.$australium.$killstreak.$effects.$autoprice.$sell_keys.$sell_metal.$buy_keys.$buy_metal.$intent.$limit."\n";
      echo $output."<br />";
     }
   } else if($option == "!remove item="){
      if(trim($item) != ""){
         $output = $option.trim($item)."\n";
         echo $output."<br />";
        }
   }
 }

 //Output Commands
