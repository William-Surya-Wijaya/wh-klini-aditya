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

function getDataUser($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"select * from user");
    return $data ;
}

?>