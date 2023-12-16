<?php
include("./models/RegisterObat.php");
function tambahObat($req){
    if($req['nama']==''){
        header('Location: ./route.php?action=new-obat');
    }
    saveObat($req);
}   

function modifyObat($req){
    if($req['nama']==''){
        header('Location: ./route.php?action=modify-obat');
    }
    editObat($req);
}
function searchObat($req){
    if($req['nama']==''){
        header('Location: ./route.php?action=search-obat');
    }
    searchObatData($req);
}



function viewObat($view,$data=[]){      
    $result = getPageobatData($data);
    $jumlahhalaman = pageobatNum($data);
    $halamansekarang = $data["page"];
    include $view;
}

function getThisobat($view, $data=[]){
    $result = getThisObatData($data);
    include $view;
}
function deleteThisobat($data=[]){
    deleteThisobatData($data);
}
function searchThisobat($data = []) {
    searchObatData($data);
    view('./pages/obatIndex.php', $data);
}
function getJenisSelect($id = null){
    return Selectjenis($id);
}

?>