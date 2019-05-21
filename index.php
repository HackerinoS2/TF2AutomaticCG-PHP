<?php 

include 'views/header.php';

if(isset($_GET["page"])){
    $page = $_GET["page"];
} else {
    $page = "home";
}

switch($page){
    case 'home':
    include 'views/home.php';
    break;

    default:
    include 'views/home.php';
}

include 'views/footer.php';