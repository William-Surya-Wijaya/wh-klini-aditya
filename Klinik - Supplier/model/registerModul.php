<?php

function saveUser($user){
    include('koneksi.php');
    $query = "INSERT INTO user(nama, username, pass, id_role) VALUES('".$user['name']."' , '".$user['username']."' , '".$user['password']."', '".$user['roles']."')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=user-data');
    }else{
        echo 'gagal';
    }
}

function getdataUser($value){
    include('koneksi.php');
    $data = mysqli_query($koneksi,"SELECT * FROM user WHERE deleted_at IS NULL");
    return $data;
}

function getidUser($value){
    include('koneksi.php');
    $id = mysqli_query($koneksi,"SELECT a.`id_user`,a.`nama`, a.`username`, a.`pass`, r.`id_role`, r.`role` FROM user as a LEFT JOIN role as r ON a.id_role = r.id_role WHERE id_user = '".$value['id_user']."'");
    return $id;
}

function editData($user){
    include('koneksi.php');
    $query = "UPDATE user SET nama = '".$user['name']."', username = '".$user['username']."', pass = '".$user['password']."',id_role = '".$user['roles']."'WHERE id_user = '".$user['id']."'";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=user-data');
    }else{
        echo 'gagal';
    }
}

function deleteData($id) {
    include('koneksi.php');
    $query = "UPDATE user SET deleted_at = NOW() WHERE id_user = '".$id."'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location: ./route.php?action=user-data');
    } else {
        echo 'gagal';
    }
}

function pagination($page)
{
    include('koneksi.php');
    $data = mysqli_query($koneksi, "SELECT count(*) as jumlah_halaman FROM user WHERE deleted_at IS NULL");
    $pg = ceil(mysqli_fetch_array($data)['jumlah_halaman']/5);
    return $pg;
}

function page_data($page){
    include('koneksi.php');
    $result = mysqli_query($koneksi, "SELECT a.`id_user`, a.`nama`, a.`username`, a.`pass`, r.`role` FROM `user` AS a LEFT JOIN `role` AS r ON a.id_role = r.id_role WHERE a.deleted_at IS NULL LIMIT ".($page['halaman']*5).",5");
    return $result;
}

function searchData($search, $page) {
    include('koneksi.php');
    $condition = ($search != '') ? "AND username LIKE '%$search%'" : '';
    $result = mysqli_query($koneksi, "SELECT a.`id_user`, a.`nama`, a.`username`, a.`pass`, r.`role` FROM `user` AS a LEFT JOIN `role` AS r ON a.id_role = r.id_role WHERE a.deleted_at IS NULL $condition LIMIT " . ($page * 5) . ",5");

    return $result;
}

function getRole($role){
    include('koneksi.php');
    $var = array();
    $result = mysqli_query($koneksi, "SELECT id_role, `role` FROM role where deleted_at IS NULL");
    while($temp = mysqli_fetch_assoc($result)){
        $var[] = $temp;
    }
    return $var;
}

?>