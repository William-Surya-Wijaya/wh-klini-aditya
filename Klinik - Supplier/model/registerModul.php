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

function getidUser($value){
    include('koneksi.php');
    $id = mysqli_query($koneksi,"SELECT * FROM user where id_user = '".$value['id_user']."'");
    return $id;
}

function editData($user){
    include('koneksi.php');
    $query = "UPDATE user SET nama = '".$user['name']."', username = '".$user['username']."', pass = '".$user['password']."' WHERE id_user = '".$user['id']."'";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=user-data');
    }else{
        echo 'gagal';
    }
}
?>