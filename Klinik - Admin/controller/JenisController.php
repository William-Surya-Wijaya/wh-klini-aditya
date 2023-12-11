<?php
include("./models/RegisterJenis.php");
function tambahJenis($req){
    if($req['jenis']==''){
        header('Location: ./route.php?action=new-jenis');
    }
    saveJenis($req);
}   

function modifyJenis($req){
    if($req['jenis']==''){
        header('Location: ./route.php?action=modify-jenis');
    }
    editJenis($req);
}
function searchJenis($req){
    if($req['jenis']==''){
        header('Location: ./route.php?action=search-jenis');
    }
    searchJenisData($req);
}



function viewJenis($view,$data=[]){      
    $result = getPagejenisData($data);
    $jumlahhalaman = pagejenisNum($data);
    $halamansekarang = $data["page"];
    // var_dump($result);   
    include $view;
}

function getThisjenis($view, $data=[]){
    $result = getThisJenisData($data);
    include $view;
}
function deleteThisJenis($data=[]){
    deleteThisJenisData($data);
}
function searchThisjenis($data = []) {
    searchJenisData($data);
    view('./pages/jenisObatIndex.php', $data);
}

?>