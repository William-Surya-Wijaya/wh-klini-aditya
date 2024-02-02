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
        if($req['id_trans']==''){
            header('Location: ./route.php?action=modify-trans');
        }
        editTrans($req);
    }
    function searchTransData($req){
        if($req['id_trans']==''){
            header('Location: ./route.php?action=search-trans');
        }
        searchTData($req);
    }
    function searchTransDetailData($data){
        // header('Content-Type: application/json');
        $detailData = searchTDataDetail($data);
        echo json_encode($detailData);
        // return searchTDataDetail($idTrans);

        // header('Content-Type: application/json');
        // $data = searchTDataDetail($idTrans);
        // echo json_encode($data);

        // if($req['id']==''){
        //     header('Location: ./route.php?action=search-trans-detail');
        // }
        // searchTDataDetail($req);
    }



    function viewTrans($view,$data=[]){
        $result = getPageTransData($data);
        $jumlahhalaman = pageTransNum($data);
        $halamansekarang = $data["page"];
        include $view;
    };
    function viewTransDetail($view,$data=[]){
        // var_dump($view);die;        
        $result = getPageTransDetailData($data);
        // var_dump($result);die;  
        $jumlahhalaman = pageTransDetailNum($data);
        $halamansekarang = $data["page"];
        include $view;
    };

    function getThistrans($view, $data=[]){
        $result = getThisTransData($data);
        include $view;
    }
    function getThistransdetail($view, $data=[]){
        $result = getThisTransDetailData($data);
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
// -----------------  tambah-trans -----------------------
    function searchObatautodata($pencarian){
        echo obatAutoData($pencarian);
    }
    function searchObathargaAutodata($harga){
        echo obathargaAutoData($harga);
    }
    function searchObatidAutodata($harga){
        echo obatidAutoData($harga);
    }
    function searchObatQtyAutodata($qty){
        echo obatQtyAutoData($qty);
    }
    function searchSubtotalAutodata($qty){
        echo obatSubtotalAutoData($qty);
    }
?>