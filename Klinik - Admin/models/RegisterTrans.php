<?php 

function saveTrans($value) {
    include("koneksi.php");
    $query_mst = "INSERT INTO trans_mst(tanggal, total, total_qty)
    VALUES ('".$value['tanggal']."','".$value['totalHarga']."','".$value['totalQty']."')";
    $result_mst = mysqli_query($koneksi, $query_mst);
    $id_trans = mysqli_insert_id($koneksi);


    // if($result_mst){
    //     header("location: ./route.php?action=trans-data");
    // }
    // else{
    //     echo"Gagal.";   
    // }



    
    for($i = 1; $i <= $_POST['nomorIndex']; $i++){
        if(isset( $_POST["newidobatInput".$i])){
            $id_obat = $_POST["newidobatInput".$i];
            $qty_obat = $_POST["newqtyInput".$i];
            $harga_obat = $_POST["newHargaInput".$i];
            $subtotal_obat = $_POST["newSubtotalInput".$i];
            
            $query = "INSERT INTO trans_detail(id_trans, id_obat, qty, harga, subtotal) 
            VALUES ('".$id_trans."','".$id_obat."','".$qty_obat."','".$harga_obat."','".$subtotal_obat."')";
            // var_dump($query);
            $result = mysqli_query($koneksi,$query); 
        };

    }
    // die;
    if($result){
        header("location: ./route.php?action=trans-data");
    }
    else{
        echo"Gagal.";   
    }
    
}
function editTrans($value) {
    include("koneksi.php");
    $query = "UPDATE trans_mst SET tanggal = '".$value['tanggal']."', total_qty= '".$value['total_qty']."',total ='".$value['total']."' where id_trans='".$value["id"]."'";
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
    
    $search_awal = mysqli_real_escape_string($koneksi, $value["tanggal_awal"]);
    $search_akhir = mysqli_real_escape_string($koneksi, $value["tanggal_akhir"]);
    $query = "SELECT * FROM trans_mst WHERE tanggal LIKE '%$search_awal%' AND '%$search_akhir%'";
    $data = mysqli_query($koneksi, $query);
    // var_dump($data);
    return $data;
    
}
function searchTDataDetail($id_master){
    include("koneksi.php");
    
    $id_trans = mysqli_real_escape_string($koneksi, $id_master);
    $query = "SELECT a.`id_det`, a.`id_trans`, b.`nama_obat`, a.`qty`, a.`harga`, a.`subtotal`   FROM `trans_detail` a LEFT JOIN obat b ON a.`id_obat` = b.`id_obat` WHERE a.`id_trans`  = '$id_trans'";
    // $data = mysqli_query($koneksi, $query);
    $result = mysqli_query($koneksi, $query);
    $data = array();
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        mysqli_free_result($result);

    }
    // var_dump($data);    
    return json_encode($data);
    
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
    $data = mysqli_query($koneksi,"SELECT * FROM `trans_mst` where deleted_at is null and id_trans='".$value['id_trans']."'");
    return $data;
}
function getThisTransDetailData($value){
    include("koneksi.php");
    // var_dump($value['id_user']);
    $data = mysqli_query($koneksi,"SELECT * FROM `trans_detail` where deleted_at is null and id_det='".$value['id_det']."'");
    return $data;
}
function deleteThisTransData($value){
    include("koneksi.php");
    // var_dump($value['id_user']);
    $data = mysqli_query($koneksi,"UPDATE trans_mst SET deleted_at = NOW() WHERE id_trans='".$value["id_trans"]."'");
    // var_dump($data); die();
    if($data){
        header("location: ./route.php?action=trans-data");
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
    $data = mysqli_query($koneksi,"SELECT * FROM `trans_mst` where deleted_at is null and tanggal between '".$value["tanggal_awal"]."' and '".$value["tanggal_akhir"]."' ORDER BY tanggal ASC limit ".($value["page"]*10).", 10 ");
    return $data;
}
function getPageTransDetailData($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"SELECT * FROM `trans_detail` where deleted_at is null and id_det like '%".$value["id_det"]."%' ORDER BY id_det ASC limit ".($value["page"]*10).", 10 ");
    return $data;
}


function pageTransNum($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"SELECT id_trans FROM `trans_mst` where deleted_at is null and tanggal between '".$value["tanggal_awal"]."' and '".$value["tanggal_akhir"]."' ORDER BY tanggal ASC ");
    $total = mysqli_num_rows($data);
    // var_dump($value['page']);
    $pages = ceil($total/10);
    return $pages;


}
function pageTransDetailNum($value){
    include("koneksi.php");
    $data = mysqli_query($koneksi,"SELECT * FROM `trans_detail` where deleted_at is null and id_det like '%".$value["id_det"]."%' ORDER BY id_det ASC limit ".($value["page"]*10).", 10 ");
    $total = mysqli_num_rows($data);
    // var_dump($value['page']);
    $pages = ceil($total/10);
    return $pages;


}
// ----------------------------- tambah-trans ----------------------------
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
function obatidAutoData($value){
    include("koneksi.php");
    $result = mysqli_query($koneksi, "SELECT id_obat from `obat` WHERE nama_obat = '".$value."' AND deleted_at IS NULL");
    $result2 = '';
    while ($row = mysqli_fetch_assoc($result)) {
        // array_push($result2,$row['harga_obat']);
        $result2 = $row['id_obat'];
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