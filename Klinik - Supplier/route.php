<?php
include("./controller/registerController.php");

if (isset($_GET['action']) && $_GET['action'] == 'register-proses'){
    registerUser($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'register'){
    include("./pages/register.php");
}
;

if(isset($_GET['action']) && $_GET['action'] == 'user-data') {
    $data = ["page"=>"0"];
    view('./pages/userIndex.php', $data);
}

if (isset($_GET['action']) && $_GET['action'] == 'tambah-data'){
    tambahUser($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'addUser'){
    include("./pages/tambahUser.php");
}
?>