<?php
include('./model/supplierModul.php');


function searchSup($view, $data) {
    if (!empty($data['search'])) {
        $result = searchDataSup($data['search'], $data['halaman']);
    } else {
        $result = page_dataSup($data);
    }
    $halaman = pagination($data);
    $number = $data['halaman'];
    include $view;
}

function tambahSup($REQ){
    if($REQ ['nama'] == ''){
        header('location :./route.php?action = tambah-sup');
    }
    saveSup($REQ);
}

function editSup($REQ){
    if($REQ ['nama'] == ''){
        header('location :./route.php?action = edit-dataSup');
    }
    editDataSup($REQ);
}

function tampilSup($view, $id = []){
    $result = getidSup($id);
    include $view;
}

?>
