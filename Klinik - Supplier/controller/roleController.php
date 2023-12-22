<?php
include('./model/roleModul.php');

function tambahRole($REQ){
    if($REQ ['role'] == ''){
        header('location :./route.php?action = tambah-role');
    }
    saveRole($REQ);
}

function editRole($REQ){
    if($REQ ['role'] == ''){
        header('location :./route.php?action = edit-dataRole');
    }
    editDataRole($REQ);
}


function tampilRole($view, $id = []){
    $result = getidRole($id);
    include $view;
}


function searchRole($view, $data) {
    if (!empty($data['search'])) {
        $result = searchDataRole($data['search'], $data['halaman']);
    } else {
        $result = page_dataRole($data);
    }
    $halaman = pagination($data);
    $number = $data['halaman'];
    include $view;
}



?>