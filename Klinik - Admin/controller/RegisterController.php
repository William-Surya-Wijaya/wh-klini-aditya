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



function view($view,$data=[]){
    $result = getDataUser($data);        
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
?>