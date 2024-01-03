<?php 

include("./controller/RegisterController.php");
include("./controller/RoleController.php");
include("./controller/ObatController.php");
include("./controller/JenisController.php");
include("./controller/TransController.php");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
// ------------------------------------------------ user
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


// -------------------------------- role -------------------------------------
if(isset($_GET['action']) && $_GET['action'] == 'tambah-role') {
    tambahRole($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'edit-role') {
    modifyRole($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'search-role') {
    searchRoleData($_POST);
}

// ------------------------------------ obat --------------------------------
if(isset($_GET['action']) && $_GET['action'] == 'tambah-obat') {
    tambahObat($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'edit-obat') {
    modifyObat($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'search-obat') {
    searchObatData($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'search-auto-obat') {
    searchObatautodata(isset($_GET['term'])? $_GET['term']: '' );
}
if(isset($_GET['action']) && $_GET['action'] == 'search-harga-auto-obat') {
    searchObathargaAutodata(isset($_GET['term'])? $_GET['term']: '' );
}
if(isset($_GET['action']) && $_GET['action'] == 'search-qty-auto-obat') {
    searchObatQtyAutodata(isset($_GET['term'])? $_GET['term']: '' );
}
if(isset($_GET['action']) && $_GET['action'] == 'subtotal-auto-obat') {
    searchSubtotalAutodata(isset($_GET['term'])? $_GET['term']: '' );
}

// ------------------------------------ jenis obat -----------------------------
if(isset($_GET['action']) && $_GET['action'] == 'tambah-jenis') {
    tambahJenis($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'edit-jenis') {
    modifyJenis($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'search-jenis') {
    searchJenisData($_POST);
}
// ----------------------------------- trans ------------------------------------
if(isset($_GET['action']) && $_GET['action'] == 'tambah-trans') {
    tambahTrans($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'edit-trans') {
    modifyTrans($_POST);
}
if(isset($_GET['action']) && $_GET['action'] == 'search-trans') {
    searchTransData($_POST);
}
// -------------------------------------  DATA  ----------------------------------------


// ------------------------------------  user-data ----------------------------
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

// ----------------------------------- role-data --------------------------
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
// ------------------------ obat-data --------------------------------------
if(isset($_GET['action']) && $_GET['action'] == 'new-obat') {
    include('./pages/tambahObat.php');
}
if(isset($_GET['action']) && $_GET['action'] == 'modify-obat') {
    // include('./pages/editData.php');
    $data = ['id_obat'=> $_GET["id"]];
    getThisobat('./pages/editObat.php',$data);
}
if(isset($_GET['action']) && $_GET['action'] == 'delete-obat') {
    // include('./pages/editData.php');
    $data = ['id_obat'=> $_GET["id"]];
    deleteThisobat($data);
}
// ---------------------------------- jenis-data -----------------------------
if(isset($_GET['action']) && $_GET['action'] == 'new-jenis') {
    include('./pages/tambahJenis.php');
}
if(isset($_GET['action']) && $_GET['action'] == 'modify-jenis') {
    // include('./pages/editData.php');
    $data = ['id_jenis'=> $_GET["id"]];
    getThisjenis('./pages/editJenis.php',$data);
}
if(isset($_GET['action']) && $_GET['action'] == 'delete-jenis') {
    // include('./pages/editData.php');
    $data = ['id_jenis'=> $_GET["id"]];
    deleteThisjenis($data);
}
// ---------------------------------- trans-data ---------------------------------
if(isset($_GET['action']) && $_GET['action'] == 'new-trans') {
    include('./pages/tambahTrans.php');
}
if(isset($_GET['action']) && $_GET['action'] == 'modify-trans') {
    // include('./pages/editData.php');
    $data = ['id_trans'=> $_GET["id"]];
    getThisTrans('./pages/editJenis.php',$data);
}
if(isset($_GET['action']) && $_GET['action'] == 'delete-trans') {
    // include('./pages/editData.php');
    $data = ['id_trans'=> $_GET["id"]];
    deleteThisTrans($data);
}

// --------------------------------- halaman --------------------------------------
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
if(isset($_GET['action']) && $_GET['action'] == 'obat-data') {
    $halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 0;
    $obat = isset($_GET['nama']) ? $_GET["nama"] : '';
    $data = ['nama' => $obat,"page" => $halaman];
    viewObat('./pages/obatIndex.php', $data);
}
if(isset($_GET['action']) && $_GET['action'] == 'jenis-data') {
    $halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 0;
    $jenis = isset($_GET['jenis']) ? $_GET["jenis"] : '';
    $data = ['jenis' => $jenis,"page" => $halaman];
    viewJenis('./pages/jenisObatIndex.php', $data);
}
if(isset($_GET['action']) && $_GET['action'] == 'trans-data') {
    viewTrans('./pages/transIndex.php');
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