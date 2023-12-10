<?php
include("./controller/registerController.php");

if (isset($_GET['action']) && $_GET['action'] == 'register-proses'){
    registerUser($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'register'){
    include("./pages/register.php");
}


if (isset($_GET['action']) && $_GET['action'] == 'tambah-data'){
    tambahUser($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'addUser'){
    include("./pages/tambahUser.php");
}

if (isset($_GET['action']) && $_GET['action'] == 'edit-data'){
    editUser($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'editUser'){
    $Ed = ['id_user' => $_GET ['id']];
    tampilData('./pages/editUser.php', $Ed);
}

if (isset($_GET['action']) && $_GET['action'] == 'deleteUser') {
    $idToDelete = $_GET['id'];
    deleteData($idToDelete);
}

// if (isset($_GET['action']) && $_GET['action'] == 'user-data') {
//     $page = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
//     $data = ["halaman" => $page];
//     view('./pages/userIndex.php', $data);
// }

if (isset($_GET['action']) && $_GET['action'] == 'user-data') {
    $page = isset($_GET['halaman']) ? $_GET['halaman'] : 0;
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $data = ["halaman" => $page, "search" => $search];
    searchUser('./pages/userIndex.php', $data);
}





?>