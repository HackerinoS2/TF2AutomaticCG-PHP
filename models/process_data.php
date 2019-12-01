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

