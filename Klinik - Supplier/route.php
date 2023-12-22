<?php
include("./controller/registerController.php");
include("./controller/roleController.php");
include("./controller/obatController.php");
include("./controller/supplierController.php");

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


//----------------------------OBAT----------------------------------

if (isset($_GET['action']) && $_GET['action'] == 'obat-data') {
    $page = isset($_GET['halaman']) ? $_GET['halaman'] : 0;
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $data = ["halaman" => $page, "search" => $search];
    searchObat('./pages/obatIndex.php', $data);
}

if (isset($_GET['action']) && $_GET['action'] == 'tambah-obat'){
    tambahObat($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'addObat'){
    include("./pages/tambahObat.php");
}


if (isset($_GET['action']) && $_GET['action'] == 'edit-obatData'){
    modifyObat($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'edit-obat'){
    $Ed = ['id_obat' => $_GET ['id']];
    tampilDataObat('./pages/editObat.php', $Ed);
}

if (isset($_GET['action']) && $_GET['action'] == 'deleteObat') {
    $idToDelete = $_GET['id'];
    deleteDataObat($idToDelete);
}

//----------------------------SUPPLIER----------------------------------
if (isset($_GET['action']) && $_GET['action'] == 'sup-data') {
    $page = isset($_GET['halaman']) ? $_GET['halaman'] : 0;
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $data = ["halaman" => $page, "search" => $search];
    searchSup('./pages/supplierIndex.php', $data);
}

if (isset($_GET['action']) && $_GET['action'] == 'tambah-sup'){
    tambahSup($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'addSup'){
    include("./pages/tambahSup.php");
}

if (isset($_GET['action']) && $_GET['action'] == 'deleteSup') {
    $idToDelete = $_GET['id'];
    deleteDataSup($idToDelete);
}

if (isset($_GET['action']) && $_GET['action'] == 'edit-dataSup'){
    editSup($_POST);
}

if(isset($_GET['action']) && $_GET['action'] == 'editSupPage'){
    $Ed = ['id_sup' => $_GET ['id']];
    tampilSup('./pages/editSupplier.php', $Ed);
}

?>