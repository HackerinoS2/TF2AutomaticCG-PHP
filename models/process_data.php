<?php

require('../controllers/processData.inc.php');

//Getting the data
$option = $_POST['option'];
$items = $_POST['items'];
$intent = $_POST['intent'];
$limit = $_POST['limit'];

$processData = new ProcessData();

