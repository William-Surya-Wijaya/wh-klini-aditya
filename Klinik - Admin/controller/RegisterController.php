<?php
include("./models/RegisterModul.php");
function registerUser($req){
    if($req['username']==''){
        header('Location: ./route.php?action=register');
    }
    saveUser($req);
}


function view($view,$data=[]){
    $result = getDataUser($data);
    // var_dump($result);
    include $view;
}

?>