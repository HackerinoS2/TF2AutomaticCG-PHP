<?php

require('../controllers/processData.inc.php');

//Getting the data
$option = $_POST['option'];
$items = $_POST['items'];
$intent = $_POST['intent'];
$limit = $_POST['limit'];

//Pricing
$sell_keys = trim($_POST['sell_keys']);
$sell_metal = trim($_POST['sell_metal']);
$buy_keys = trim($_POST['buy_keys']);
$buy_metal = trim($_POST['buy_metal']);

$processData = new ProcessData();

/*
    Need:
    Option;
    Items;
    Intent;
    Limit;

    Convert Quality;
    Convert Australium;
    Convert Craftable;
    Convert Killstreak;
    Convert Effect;
*/

$processData->set_option($option);
$processData->set_items($items);
$processData->set_intent($intent);
$processData->set_limit($limit);

foreach ($processData->itemsArray as $item) {
    $tempOption = $processData->option;
    $tempCraftable = $processData->convert_craftable_to_command($item);
    $tempQuality = $processData->convert_quality_to_command($item);
    $tempAustralium = $processData->convert_australium_to_command($item);
    $tempKillstreak = $processData->convert_killstreak_to_command($item);
    $tempEffect = $processData->convert_effect_to_command($item);
    $tempIntent = $processData->intent;
    $tempLimit = $processData->limit;

    echo $tempOption.$item.$tempCraftable.$tempQuality.$tempAustralium.$tempKillstreak.$tempEffect.$tempIntent.$tempLimit.'\n';
}