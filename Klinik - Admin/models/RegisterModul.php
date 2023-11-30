<?php 

function saveUser($value) {
    include("koneksi.php");
    $query = "INSERT INTO user(nama, username, pass) 
    VALUES ('".$value['nama']."','".$value['username']."','".$value['pass']."')";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=user-data");
    }
    else{
        echo"Gagal.";   
    }
}
function editUser($value) {
    include("koneksi.php");
    $query = "UPDATE user SET nama = '".$value['nama']."', username= '".$value['username']."',pass ='".$value['pass']."' where id_user='".$value["id"]."'";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=user-data");
    }
    else{
        echo"Gagal.";   
    }
}



function getDataUser($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"select * from user");
    return $data ;
}

function getThisUserData($value){
    include("koneksi.php");
    // var_dump($value['id_user']);
    $data = mysqli_query($koneksi,"select * from user where id_user='".$value['id_user']."'");
    return $data;
}
?>