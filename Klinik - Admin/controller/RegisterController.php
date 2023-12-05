<?php
include("./models/RegisterModul.php");
function registerUser($req){
    if($req['username']==''){
        header('Location: ./route.php?action=register');
    }
    saveUser($req);
}
function tambahUser($req){
    if($req['username']==''){
        header('Location: ./route.php?action=new-user');
    }
    saveUser($req);
}   

function modifyUser($req){
    if($req['username']==''){
        header('Location: ./route.php?action=modify-data');
    }
    editUser($req);
}
function searchUser($req){
    if($req['nama']==''){
        header('Location: ./route.php?action=search-data');
    }
    searchData($req);
}



function view($view,$data=[]){
    // $result = getDataUser($data);        
    $result = getPageData($data);
    $jumlahhalaman = pageNum($data);
    $halamansekarang = $data["page"];
    // var_dump($result);   
    include $view;
}

function getThisuser($view, $data=[]){
    $result = getThisUserData($data);
    include $view;
}
function deleteThisuser($data=[]){
    deleteThisUserData($data);
}
function searchThisuser($data = []) {
    searchData($data);
    view('./pages/userIndex.php', $data);
}

?>