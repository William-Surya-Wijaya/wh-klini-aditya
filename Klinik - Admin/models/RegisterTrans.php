<?php 

function saveTrans($value) {
    include("koneksi.php");
    $query = "INSERT INTO trans_detail(tanggal, total, harga) 
    VALUES ('".$value['tanggal']."','".$value['total']."','".$value['qty']."')";
    // var_dump($query);
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=trans-data");
    }
    else{
        echo"Gagal.";   
    }
}
function editTrans($value) {
    include("koneksi.php");
    $query = "UPDATE user SET nama = '".$value['nama']."', username= '".$value['username']."',pass ='".$value['pass']."',id_role ='".$value['role-select']."' where id_user='".$value["id"]."'";
    $result = mysqli_query($koneksi,$query); 
    if($result){
        header("location: ./route.php?action=trans-data");
    }
    else{
        echo"Gagal.";   
    }
}

function searchTData($value){
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



// function getDataTrans($value){
//     include("koneksi.php");
//     // $data = mysqli_query($koneksi,"select * from user");
//     // $data = mysqli_query($koneksi,"select * from user where deleted_at is not null");
//     $data = mysqli_query($koneksi,"select * from trans_detail where deleted_at is null");
//     return $data ;
// }

function getThisTransData($value){
    include("koneksi.php");
    // var_dump($value['id_user']);
    $data = mysqli_query($koneksi,"SELECT * FROM `trans_detail` where deleted_at is null and id_det='".$value['id_trans']."'");
    return $data;
}
function deleteThisTransData($value){
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

// function Selectrole($value){
//     include("koneksi.php");
//     $data = array();
//     $result = mysqli_query($koneksi,"SELECT id_role, role FROM `role` WHERE deleted_at IS NULL");
//     while ( $row = mysqli_fetch_assoc($result)) {
//         $data[] = $row;
//     }
//     return $data;
// }


function getPageTransData($value){
    include("koneksi.php");
    // $mulai = pageData($halaman);
    $data = mysqli_query($koneksi,"SELECT * FROM `trans_detail` where deleted_at is null ");
    return $data;
}


function pageTransNum($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi,"select count(*) from trans_detail where deleted_at is null");

    return $result;


}

function obatAutoData($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi, "SELECT nama_obat from `obat` WHERE nama_obat LIKE'%".$value."%' AND deleted_at IS NULL");
    $result2 = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($result2,$row['nama_obat']);
    };
    return json_encode($result2);
}
function obathargaAutoData($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi, "SELECT harga_obat from `obat` WHERE nama_obat = '".$value."' AND deleted_at IS NULL");
    $result2 = '';
    while ($row = mysqli_fetch_assoc($result)) {
        // array_push($result2,$row['harga_obat']);
        $result2 = $row['harga_obat'];
    };
    return json_encode($result2);
}
function obatQtyAutoData($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi, "SELECT stock from `obat` WHERE nama_obat = '".$value."' AND deleted_at IS NULL");
    $result2 = '';
    while ($row = mysqli_fetch_assoc($result)) {
        // array_push($result2,$row['harga_obat']);
        $result2 = $row['stock'];
    };
    return json_encode($result2);
}
function obatSubtotalAutoData($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi, "SELECT harga_obat*stock as subtotal from `obat` WHERE nama_obat = '".$value."' AND deleted_at IS NULL");
    $result2 = '';
    while ($row = mysqli_fetch_assoc($result)) {
        // array_push($result2,$row['harga_obat']);
        $result2 = $row['subtotal'];
    };
    return json_encode($result2);
}
?>