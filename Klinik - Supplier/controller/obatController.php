<?php
include('./model/obatModul.php');
function tambahObat($REQ){
    if($REQ ['nama-obat'] == ''){
        header('location :./route.php?action = tambah-obat');
    }else if($REQ ['harga-obat'] == ''){
        header('location :./route.php?action = tambah-obat');
    }else if($REQ ['stock'] == ''){
        header('location :./route.php?action = tambah-obat');
    }
    saveObat($REQ);
}

function searchObat($view, $data) {
    if (!empty($data['search'])) {
        $result = searchData_Obat($data['search'], $data['halaman']);
    } else {
        $result = page_obat($data);
    }
    $halaman = pagination_obat($data);
    $number = $data['halaman'];
    include $view;
}

function modifyObat($REQ){
    if($REQ ['namaObat'] == ''){
        header('location :./route.php?action = edit-obatData');
    }else if($REQ ['hargaObat'] == ''){
        header('location :./route.php?action = edit-obatData');
    }else if($REQ ['stock'] == ''){
        header('location :./route.php?action = edit-obatData');
    }
    editData_Obat($REQ);
}

function tampilDataObat($view, $id = []){
    $result = getidObat($id);
    include $view;
}

function supSelect($id = null){
    return getSup($id);
}

?>