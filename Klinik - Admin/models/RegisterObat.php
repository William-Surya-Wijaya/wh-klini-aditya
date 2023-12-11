<?php 

function saveObat($value) {
    include("koneksi.php");
    $query = "INSERT INTO obat(nama_obat, harga_obat, stock, id_jenis) 
    VALUES ('".$value['nama']."','".$value['harga']."','".$value['stock']."','".$value['jenis-select']."')";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=obat-data");
    }
    else{
        echo"Gagal.";   
    }
}
function editObat($value) {
    include("koneksi.php");
    $query = "UPDATE obat SET nama_obat = '".$value['namaObat']."', harga_obat= '".$value['hargaObat']."',stock ='".$value['stockObat']."',id_jenis ='".$value['jenis-select']."' where id_obat='".$value["id"]."'";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=obat-data");
    }
    else{
        echo"Gagal.";   
    }
}

function searchObatData($value){
    include("koneksi.php");

    $search = mysqli_real_escape_string($koneksi, $value["nama"]);
    $query = "select * from obat where nama_obat like '%$search%'";
    $data = mysqli_query($koneksi, $query);
    // var_dump($data);
    return $data;

}



function getThisObatData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"SELECT a.`id_obat`, a.`nama_obat`, a.`harga_obat`, a.`stock`, a.`deleted_at`, b.`id_jenis`, b.`jenis` FROM obat a LEFT JOIN jenis b ON a.`id_jenis` = b.`id_jenis` where a.`deleted_at` is null and id_obat='".$value['id_obat']."'");
    return $data;
}
function deleteThisobatData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"update obat set deleted_at = now() where id_obat='".$value["id_obat"]."'");
    // var_dump($data); die();
    if($data){
        header("location: ./route.php?action=obat-data");
    }
    else{
        echo"Gagal.";   
    };

}



function getPageobatData($value){
    include("koneksi.php");
    // $mulai = pageData($halaman);
    $data = mysqli_query($koneksi,"SELECT a.`id_obat`, a.`nama_obat`, a.`harga_obat`, a.`stock`, a.`deleted_at`, b.`jenis` FROM obat a LEFT JOIN jenis b ON a.`id_jenis` = b.`id_jenis` where a.`deleted_at` is null and nama_obat like '%".$value["nama"]."%' limit ".($value["page"]*10).", 10");
    return $data;
}


function pageobatNum($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi,"select count(*) from obat where deleted_at is null and nama_obat like '%".$value["nama"]."%'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/10);
    return $pages;


}
function Selectjenis($value){
    include("koneksi.php");
    $data = array();
    $result = mysqli_query($koneksi,"SELECT id_jenis, jenis FROM `jenis` WHERE deleted_at IS NULL");
    while ( $row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}
?>