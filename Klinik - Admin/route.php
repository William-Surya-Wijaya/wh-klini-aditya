<?php 

include("./controller/RegisterController.php");

if(isset($_GET['action']) && $_GET['action'] == 'register-process') {
    registerUser($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'register') {
    include('./pages/register.php');
}
if(isset($_GET['action']) && $_GET['action'] == 'user-data') {
    $data = ["page"=>"0"];
    view('./pages/userIndex.php', $data);
}


// if(isset($_GET['action']) && $_GET['action'] == 'register') {
//     $data = ["data"=>"hallo gais david disini"];
//     view('./pages/register.php', $data);
// }
// header('location: ./pages/register.php');
?>