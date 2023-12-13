<?php
include("./controller/registerController.php");
include("./controller/roleController.php");

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


// if (isset($_GET['action']) && $_GET['action'] == 'role-data') {
//     $page = isset($_GET['halaman']) ? $_GET['halaman'] : 0;
//     $data = ["halaman" => $page];
//     viewRole('./pages/roleIndex.php', $data);
// }

if (isset($_GET['action']) && $_GET['action'] == 'user-data') {
    $page = isset($_GET['halaman']) ? $_GET['halaman'] : 0;
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $data = ["halaman" => $page, "search" => $search];
    searchUser('./pages/userIndex.php', $data);
}

//----------------------------ROLE----------------------------------


if (isset($_GET['action']) && $_GET['action'] == 'deleteRole') {
    $idToDelete = $_GET['id'];
    deleteDataRole($idToDelete);
}

if (isset($_GET['action']) && $_GET['action'] == 'edit-dataRole'){
    editRole($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'editRolePage'){
    $Ed = ['id_role' => $_GET ['id']];
    tampilRole('./pages/editRole.php', $Ed);
}

if (isset($_GET['action']) && $_GET['action'] == 'tambah-role'){
    tambahRole($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'addRole'){
    include("./pages/tambahRole.php");
}

if (isset($_GET['action']) && $_GET['action'] == 'role-data') {
    $page = isset($_GET['halaman']) ? $_GET['halaman'] : 0;
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $data = ["halaman" => $page, "search" => $search];
    searchRole('./pages/roleIndex.php', $data);
}






?>