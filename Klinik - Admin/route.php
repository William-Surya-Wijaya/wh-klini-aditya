<?php 

include("./controller/RegisterController.php");

if(isset($_GET['action']) && $_GET['action'] == 'register-process') {
    registerUser($_POST);
}
// if(isset($_GET['action']) && $_GET['action'] == 'register') {
//     $data = ["data"=>"hallo gais david disini"];
//     view('./pages/register.php', $data);
// }
// header('location: ./pages/register.php');
?>