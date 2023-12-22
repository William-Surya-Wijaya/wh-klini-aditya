<?php
function page_dataSup($page){
    include('koneksi.php');
    $result = mysqli_query($koneksi, "   SELECT * FROM suplier WHERE deleted_at IS NULL LIMIT ".($page['halaman']*5).",5");
    return $result;
}

function searchDataSup($search, $page) {
    include('koneksi.php');
    $condition = ($search != '') ? "AND nama LIKE '%$search%'" : '';
    $result = mysqli_query($koneksi, "SELECT * FROM suplier WHERE deleted_at IS NULL $condition LIMIT " . ($page * 5) . ",5");
    return $result;
}

function saveSup($sup){
    include('koneksi.php');
    $query = "INSERT INTO suplier(nama, noHP) VALUES('" . $sup['nama'] . "', '" . $sup['noHp'] . "')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=sup-data');
    }else{
        echo 'gagal';
    }
}

function deleteDataSup($id) {
    include('koneksi.php');
    $query = "UPDATE suplier SET deleted_at = NOW() WHERE id_sup = '".$id."'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location: ./route.php?action=sup-data');
    } else {
        echo 'gagal';
    }
}

function editDataSup($sup){
    include('koneksi.php');
    $query = "UPDATE suplier SET `nama` = '".$sup['nama']."', noHP = '".$sup["noHp"]."' WHERE id_sup = '".$sup['id']."'";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=sup-data');
    }else{
        echo 'gagal';
    }
}

function getidSup($value){
    include('koneksi.php');
    $id = mysqli_query($koneksi,"SELECT * FROM suplier where id_sup = '".$value['id_sup']."'");
    return $id;
}

?>