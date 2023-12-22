<?php

function saveRole($role){
    include('koneksi.php');
    $query = "INSERT INTO role(`role`) VALUES('" . $role['role'] . "')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=role-data');
    }else{
        echo 'gagal';
    }
}

function getDataRole($value){
    include('koneksi.php');
    $data = mysqli_query($koneksi,"SELECT * FROM `role` WHERE deleted_at IS NULL");
    return $data;
}

function getidRole($value){
    include('koneksi.php');
    $id = mysqli_query($koneksi,"SELECT * FROM role where id_role = '".$value['id_role']."'");
    return $id;
}

function editDataRole($role){
    include('koneksi.php');
    $query = "UPDATE `role` SET `role` = '".$role['role']."' WHERE id_role = '".$role['id']."'";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=role-data');
    }else{
        echo 'gagal';
    }
}

function deleteDataRole($id) {
    include('koneksi.php');
    $query = "UPDATE role SET deleted_at = NOW() WHERE id_role = '".$id."'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location: ./route.php?action=role-data');
    } else {
        echo 'gagal';
    }
}

// function paginationRole($page)
// {
//     include('koneksi.php');
//     $data = mysqli_query($koneksi, "SELECT count(*) as jumlah_halaman FROM `role` WHERE deleted_at IS NULL");
//     $pg = ceil(mysqli_fetch_array($data)['jumlah_halaman']/5);
//     return $pg;
// }

function page_dataRole($page){
    include('koneksi.php');
    $result = mysqli_query($koneksi, "   SELECT * FROM `role` WHERE deleted_at IS NULL LIMIT ".($page['halaman']*5).",5");
    return $result;
}

function searchDataRole($search, $page) {
    include('koneksi.php');
    $condition = ($search != '') ? "AND role LIKE '%$search%'" : '';
    $result = mysqli_query($koneksi, "SELECT * FROM `role` WHERE deleted_at IS NULL $condition LIMIT " . ($page * 5) . ",5");
    return $result;
}


?>