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
    // $data = mysqli_query($koneksi,"select * from user");
    $data = mysqli_query($koneksi,"select * from user where deleted_at is null");
    // $data = mysqli_query($koneksi,"select * from user where deleted_at is not null");
    return $data ;
}

function getThisUserData($value){
    include("koneksi.php");
    // var_dump($value['id_user']);
    $data = mysqli_query($koneksi,"select * from user where id_user='".$value['id_user']."'");
    return $data;
}
function deleteThisUserData($value){
    include("koneksi.php");
    // var_dump($value['id_user']);
    $data = mysqli_query($koneksi,"UPDATE user SET deleted_at = NOW() WHERE id_user='".$value["id_user"]."'");
    // var_dump($data); die();
    if($data){
        header("location: ./route.php?action=user-data");
    }
    else{
        echo"Gagal.";   
    };

}

function getPageData($halaman){
    include("koneksi.php");
    // $mulai = pageData($halaman);
    $data = mysqli_query($koneksi,"select * from user where deleted_at is null limit ".($halaman*10).", 10");
    return $data;
}
function pageData($halaman){
    $halaman = 5;
    $page = isset($_GET["halaman"])?(int)$_GET["halaman"]: 1;
    $mulai = ($page>1)?($page * $halaman)-$halaman :0;
    return $mulai;
    
}

function pageNum(){
    include("koneksi.php");
    $result = mysqli_query($koneksi, "Select count(*) from user where deleted_at is null");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/10);
    return $pages;


}
?>