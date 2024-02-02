<?php 

function saveJenis($value) {
    include("koneksi.php");
    $query = "INSERT INTO `jenis`(jenis) 
    VALUES ('".$value['jenis']."')";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=jenis-data");
    }
    else{
        echo"Gagal.";   
    }
}
function editJenis($value) {
    include("koneksi.php");
    $query = "UPDATE `jenis` SET jenis = '".$value['jenis']."' WHERE id_jenis='".$value["id"]."'";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=jenis-data");
    }
    else{
        echo"Gagal.";   
    }
}

function searchJenisData($value){
    include("koneksi.php");

    $search = mysqli_real_escape_string($koneksi, $value["jenis"]);
    $query = "select * from jenis where jenis like '%$search%'";
    $data = mysqli_query($koneksi, $query);
    // var_dump($data);
    return $data;

}



function getThisJenisData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"select * from `jenis` where id_jenis='".$value['id_jenis']."'");
    return $data;
}
function deleteThisJenisData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"update `jenis` set deleted_at = now() where id_jenis='".$value["id_jenis"]."'");
    // var_dump($data); die();
    if($data){
        header("location: ./route.php?action=jenis-data");
    }
    else{
        echo"Gagal.";   
    };

}



function getPagejenisData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"select * from jenis where deleted_at is null and jenis like '%".$value["jenis"]."%' limit ".($value["page"]*10).", 10");
    return $data;
}


function pagejenisNum($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi,"select id_jenis from jenis where deleted_at is null and jenis like '%".$value["jenis"]."%'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/10);
    return $pages;


}
?>