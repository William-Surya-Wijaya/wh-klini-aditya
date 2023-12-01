<?php 

include("./controller/RegisterController.php");

if(isset($_GET['action']) && $_GET['action'] == 'register-process') {
    registerUser($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'tambah-user') {
    tambahUser($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'edit-user') {
    modifyUser($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'delete-user') {
    deleteUser($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'register') {
    include('./pages/register.php');
}
if(isset($_GET['action']) && $_GET['action'] == 'new-user') {
    include('./pages/tambahUser.php');
}
if(isset($_GET['action']) && $_GET['action'] == 'modify-data') {
    // include('./pages/editData.php');
    $data = ['id_user'=> $_GET["id"]];
    getThisuser('./pages/editData.php',$data);
}
if(isset($_GET['action']) && $_GET['action'] == 'delete-data') {
    // include('./pages/editData.php');
    $data = ['id_user'=> $_GET["id"]];
    deleteThisuser($data);
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