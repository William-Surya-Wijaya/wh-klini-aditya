<?php 

function saveUser($value) {
    include("koneksi.php");
    $query = "INSERT INTO user(nama, username, pass, id_role) 
    VALUES ('".$value['nama']."','".$value['username']."','".$value['pass']."','".$value['role-select']."')";
    // var_dump($query);
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
    $query = "UPDATE user SET nama = '".$value['nama']."', username= '".$value['username']."',pass ='".$value['pass']."',id_role ='".$value['role-select']."' where id_user='".$value["id"]."'";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=user-data");
    }
    else{
        echo"Gagal.";   
    }
}

function searchData($value){
    include("koneksi.php");
    // var_dump($value);
    // -------- 
    // $search = $value["nama"];
    // $data = mysqli_query($koneksi,"SELECT * FROM user WHERE nama LIKE '"%$search%"'");
    // var_dump($data); die();
    
    $search = mysqli_real_escape_string($koneksi, $value["nama"]);
    $query = "SELECT * FROM user WHERE nama LIKE '%$search%'";
    $data = mysqli_query($koneksi, $query);
    // var_dump($data);
    return $data;
    
}



function getDataUser($value){
    include("koneksi.php");
    // $data = mysqli_query($koneksi,"select * from user");
    // $data = mysqli_query($koneksi,"select * from user where deleted_at is not null");
    $data = mysqli_query($koneksi,"select * from user where deleted_at is null");
    return $data ;
}

function getThisUserData($value){
    include("koneksi.php");
    // var_dump($value['id_user']);
    $data = mysqli_query($koneksi,"SELECT a.`id_user`, a.`nama`, a.`username`, a.`pass`, a.`deleted_at`, b.`id_role`, b.`role` FROM `user` a LEFT JOIN role b ON a.`id_role` = b.`id_role` where a.`deleted_at` is null and id_user='".$value['id_user']."'");
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

function Selectrole($value){
    include("koneksi.php");
    $data = array();
    $result = mysqli_query($koneksi,"SELECT id_role, role FROM `role` WHERE deleted_at IS NULL");
    while ( $row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}


function getPageData($value){
    include("koneksi.php");
    // $mulai = pageData($halaman);
    $data = mysqli_query($koneksi,"SELECT a.`id_user`, a.`nama`, a.`username`, a.`pass`, a.`deleted_at`, b.`role` FROM `user` a LEFT JOIN role b ON a.`id_role` = b.`id_role` where a.`deleted_at` is null and nama like '%".$value["nama"]."%' limit ".($value["page"]*10).", 10");
    return $data;
}


function pageNum($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi,"select count(*) from user where deleted_at is null and nama like '%".$value["nama"]."%'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/10);
    return $pages;


}
?>