<?php
function saveObat($obat){
    include('koneksi.php');
    $query = "INSERT INTO obat(nama_obat, harga_obat, stock, id_sup) VALUES('".$obat['nama-obat']."' , '".$obat['harga-obat']."' , '".$obat['stock']."', '".$obat['suplier']."')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=obat-data');
    }else{
        echo 'gagal';
    }
}

function pagination_obat($page)
{
    include('koneksi.php');
    $data = mysqli_query($koneksi, "SELECT count(*) as jumlah_halaman FROM obat WHERE deleted_at IS NULL");
    $pg = ceil(mysqli_fetch_array($data)['jumlah_halaman']/5);
    return $pg;
}

function page_obat($page){
    include('koneksi.php');
    $result = mysqli_query($koneksi, "SELECT a.`id_obat`, a.`nama_obat`, a.`harga_obat`, a.`stock`, b.`id_sup`, b.`nama` FROM obat AS a LEFT JOIN suplier AS b ON a.id_sup = b.id_sup WHERE a.deleted_at IS NULL LIMIT ".($page['halaman']*5).",5");
    return $result;
}

function searchData_Obat($search, $page) {
    include('koneksi.php');
    $condition = ($search != '') ? "AND nama_obat LIKE '%$search%'" : '';
    $result = mysqli_query($koneksi, "SELECT a.`id_obat`, a.`nama_obat`, a.`harga_obat`,a.`stock`, b.`id_sup`, b.`nama` FROM obat AS a LEFT JOIN suplier AS b ON a.id_sup = b.id_sup WHERE a.deleted_at IS NULL $condition LIMIT " . ($page * 5) . ",5");

    return $result;
}

function editData_Obat($obat){
    include('koneksi.php');
    $query = "UPDATE obat SET nama_obat = '".$obat['namaObat']."', harga_obat = '".$obat['hargaObat']."', stock = '".$obat['stock']."', id_sup = '".$obat['suplier']."' WHERE id_obat = '".$obat['id']."'";

    $result = mysqli_query($koneksi, $query);
    if($result){
        header('location: ./route.php?action=obat-data');
    }else{
        echo 'gagal';
    }
}

function getidObat($value){
    include('koneksi.php');
    $id = mysqli_query($koneksi,"SELECT a.`id_obat`, a.`nama_obat`, a.`harga_obat`,a.`stock`, b.`id_sup`, b.`nama` FROM obat as a LEFT JOIN suplier as b ON a.id_sup = b.id_sup WHERE id_obat = '".$value['id_obat']."'");
    return $id;
}

function deleteDataObat($id) {
    include('koneksi.php');
    $query = "UPDATE obat SET deleted_at = NOW() WHERE id_obat = '".$id."'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location: ./route.php?action=obat-data');
    } else {
        echo 'gagal';
    }
}

function getSup($sup){
    include('koneksi.php');
    $var = array();
    $result = mysqli_query($koneksi, "SELECT id_sup, `nama` FROM suplier where deleted_at IS NULL");
    while($temp = mysqli_fetch_assoc($result)){
        $var[] = $temp;
    }
    return $var;
}
?>