<?php 

function saveRole($value) {
    include("koneksi.php");
    $query = "INSERT INTO `role`(role) 
    VALUES ('".$value['role']."')";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=role-data");
    }
    else{
        echo"Gagal.";   
    }
}
function editRole($value) {
    include("koneksi.php");
    $query = "UPDATE `role` SET role = '".$value['role']."' WHERE id_role='".$value["id"]."'";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=role-data");
    }
    else{
        echo"Gagal.";   
    }
}

function searchRoleData($value){
    include("koneksi.php");

    $search = mysqli_real_escape_string($koneksi, $value["role"]);
    $query = "select * from role where role like '%$search%'";
    $data = mysqli_query($koneksi, $query);
    // var_dump($data);
    return $data;

}



function getThisRoleData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"select * from `role` where id_role='".$value['id_role']."'");
    return $data;
}
function deleteThisRoleData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"update `role` set deleted_at = now() where id_role='".$value["id_role"]."'");
    // var_dump($data); die();
    if($data){
        header("location: ./route.php?action=role-data");
    }
    else{
        echo"Gagal.";   
    };

}



function getPageroleData($value){
    include("koneksi.php");
    // $mulai = pageData($halaman);
    $data = mysqli_query($koneksi,"select * from role where deleted_at is null and role like '%".$value["role"]."%' limit ".($value["page"]*10).", 10");
    return $data;
}


function pageroleNum($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi,"select id_role from role where deleted_at is null and role like '%".$value["role"]."%'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/10);
    return $pages;


}
?>