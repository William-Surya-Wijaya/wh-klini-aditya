<?php

function saveUser($user){
    include('koneksi.php');
    $query =  "INSERT INTO user(nama, username, pass) VALUES('".$user['name']."' , '".$user['username']."' , '".$user['password']."')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=user-data');
    }else{
        echo 'gagal';
    }
}

function getdataUser($value){
    include('koneksi.php');
    $data = mysqli_query($koneksi,"SELECT * FROM user");
    return $data;
}
?>