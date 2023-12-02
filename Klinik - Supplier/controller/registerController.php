<?php
include('./model/registerModul.php');
function registerUser($REQ){
    if($REQ ['name'] == ''){
        header('location :./route.php?action = register-proses');
    }else if($REQ ['username'] == ''){
        header('location :./route.php?action = register-proses');
    }else if($REQ ['password'] == ''){
        header('location :./route.php?action = register-proses');
    }
    saveUser($REQ);

}

function view($view, $data = []){
    $result = getdataUser($data);
    include $view;
}

function tambahUser($REQ){
    if($REQ ['name'] == ''){
        header('location :./route.php?action = tambah-data');
    }else if($REQ ['username'] == ''){
        header('location :./route.php?action = tambah-data');
    }else if($REQ ['password'] == ''){
        header('location :./route.php?action = tambah-data');
    }
    saveUser($REQ);

}

function editUser($REQ){
    if($REQ ['name'] == ''){
        header('location :./route.php?action = edit-data');
    }else if($REQ ['username'] == ''){
        header('location :./route.php?action = edit-data');
    }else if($REQ ['password'] == ''){
        header('location :./route.php?action = edit-data');
    }
    editData($REQ);
}


function tampilData($view, $id = []){
    $result = getidUser($id);
    include $view;
}
?>