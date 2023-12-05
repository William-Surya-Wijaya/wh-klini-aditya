<?php 

include("./controller/RegisterController.php");
include("./controller/RoleController.php");

if(isset($_GET['action']) && $_GET['action'] == 'register-process') {
    registerUser($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'tambah-user') {
    tambahUser($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'edit-user') {
    modifyUser($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'search-user') {
    searchUser($_POST);
}

// role
if(isset($_GET['action']) && $_GET['action'] == 'tambah-role') {
    tambahRole($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'edit-role') {
    modifyRole($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'search-role') {
    searchRoleData($_POST);
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

// role-data
if(isset($_GET['action']) && $_GET['action'] == 'new-role') {
    include('./pages/tambahRole.php');
}
if(isset($_GET['action']) && $_GET['action'] == 'modify-role') {
    // include('./pages/editData.php');
    $data = ['id_role'=> $_GET["id"]];
    getThisrole('./pages/editRole.php',$data);
}
if(isset($_GET['action']) && $_GET['action'] == 'delete-role') {
    // include('./pages/editData.php');
    $data = ['id_role'=> $_GET["id"]];
    deleteThisRole($data);
}


if(isset($_GET['action']) && $_GET['action'] == 'user-data') {
    $halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 0;
    $nama = isset($_GET['nama']) ? $_GET["nama"] : '';
    $data = ['nama' => $nama,"page" => $halaman];
    view('./pages/userIndex.php', $data);
}
if(isset($_GET['action']) && $_GET['action'] == 'role-data') {
    $halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 0;
    $role = isset($_GET['role']) ? $_GET["role"] : '';
    $data = ['role' => $role,"page" => $halaman];
    viewRole('./pages/roleIndex.php', $data);
}
// route.php

// ...
// if (isset($_GET['action']) && $_GET['action'] == 'user-data') {
//     $data = ["page" => isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 0];
//     view('./pages/userIndex.php', $data);
// }
// ...



// if(isset($_GET['action']) && $_GET['action'] == 'register') {
//     $data = ["data"=>"hallo gais david disini"];
//     view('./pages/register.php', $data);
// }
// header('location: ./pages/register.php');
?>