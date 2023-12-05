<?php
include("./models/RegisterRole.php");
function tambahRole($req){
    if($req['role']==''){
        header('Location: ./route.php?action=new-role');
    }
    saveRole($req);
}   

function modifyRole($req){
    if($req['role']==''){
        header('Location: ./route.php?action=modify-role');
    }
    editRole($req);
}
function searchRole($req){
    if($req['role']==''){
        header('Location: ./route.php?action=search-role');
    }
    searchRoleData($req);
}



function viewRole($view,$data=[]){      
    $result = getPageroleData($data);
    $jumlahhalaman = pageroleNum($data);
    $halamansekarang = $data["page"];
    // var_dump($result);   
    include $view;
}

function getThisrole($view, $data=[]){
    $result = getThisRoleData($data);
    include $view;
}
function deleteThisRole($data=[]){
    deleteThisRoleData($data);
}
function searchThisrole($data = []) {
    searchData($data);
    view('./pages/roleIndex.php', $data);
}

?>