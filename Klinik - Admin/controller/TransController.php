<?php
include("./models/RegisterTrans.php");
// function registerTrans($req){
//     if($req['username']==''){
//         header('Location: ./route.php?action=register');
//     }
//     saveTrans($req);
// }
function tambahTrans($req){
    if($req['tanggal']==''){
        header('Location: ./route.php?action=trans-data');
    }
    saveTrans($req);
}   

function modifyTrans($req){
    if($req['username']==''){
        header('Location: ./route.php?action=modify-trans');
    }
    editTrans($req);
}
function searchTransData($req){
    if($req['nama']==''){
        header('Location: ./route.php?action=search-trans');
    }
    searchTData($req);
}



function viewTrans($view,$data=[]){

    include $view;
};

function getThistrans($view, $data=[]){
    $result = getThisTransData($data);
    include $view;
}
function deleteThistrans($data=[]){
    deleteThisTransData($data);
}
function searchThistrans($data = []) {
    searchData($data);
    view('./pages/transIndex.php', $data);
}
// function getRoleSelect($id = null){
//     return Selectrole($id);
// }

function searchObatautodata($pencarian){
    echo obatAutoData($pencarian);
}
function searchObathargaAutodata($harga){
    echo obathargaAutoData($harga);
}
function searchObatQtyAutodata($qty){
    echo obatQtyAutoData($qty);
}
function searchSubtotalAutodata($qty){
    echo obatSubtotalAutoData($qty);
}
?>