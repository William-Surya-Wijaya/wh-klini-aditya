<!DOCTYPE html>
<html lang="en">
    <!-- <link rel="stylesheet" href="./myDatePicker/mydatepicker.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <style >
     @font-face {
        font-family: arone;
        src: url(./pages/ARONE.ttf);
    }
    ::-webkit-scrollbar{
            width: 5px;
    }
    ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb {
            background: rgb(160, 158, 158);
            border-radius: 10px;
    }
    * {
        padding: 0;
        margin: 0;
        font-family: arone ;
        
    }
    .body {
        display: flex;
        padding: 65px 0 0 0;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        background-color: white;
        gap :50px;
        height: 82vh;
        overflow:hidden;
        background-color: cornflowerblue;
   

    }

    a {
        text-decoration: none;
        color: black;
        width: 3%;
    }
    .login-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        width: 22%;
    }
    .input-section {
        display: flex;
        /* width: 20%; */
        font-size: 20px;
        flex-direction: row;
        justify-content: center;
        align-items: left;
        /* padding-bottom: 10px; */
        gap: 15px;
        color: black;
    }
    .input-section button{
        background-color: cornflowerblue;
        border: 2px solid cornflowerblue;
        color: white;
    }
    input[type="text"], select, textarea {
        background-color: white;
        color: black;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px 10px 10px 10px;
        font-size:15px;
    }
    .login-section form {
        display: flex;
        height: 100%;
        width: 50%;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    footer{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: cornflowerblue;
        /* gap :50px; */
        height: 11.95vh;
        overflow: hidden;
    }
    .footer-section {
        color: black;
        flex-direction: column;
        background-color: black;
        display: flex;
        column-gap: 1em;
        font-weight: 800;
        font-size: 18px;
        text-align: center;
        /* padding-top: 100px; */
        padding-bottom: 50px;
    }

    .loader{
        border: 12px solid rgb(32, 32, 32);
        border-top: 12px solid rgb(156, 136, 110);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
        z-index: 99 !important;
        position: fixed;
        bottom: 440px;
        align-items: center;
        justify-items: center;
    }
    .loader-section{
        background-color: rgb(0, 0, 0, 1);
        width: 100%;
        height: 120%;
        display: flex;
        position: fixed;
        align-items: center;
        justify-content: center;
        z-index: 99 !important;
        transition: all .35s,1.5s ease-in-out;
    }
    .loader-hidden{
        opacity: 0;
        visibility: hidden;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .swal2-popup {
        border: 1px solid rgba(255, 255, 255, 0.473);
        background-color: white;
        color: black;
        z-index: 12;
    }

    .title {
        color: black;
        font: 600;
        font-size: 25px;
        padding-bottom: 20px;
    }

    .character-table-box{
        display: flex;
        /* padding-right: 8px; */
        width: 80%;
        flex-direction: column;
        justify-content: left;
        color :aliceblue;
        font-weight: 500;
        height: 100%;
        max-height: 100%;
        overflow: auto;
        z-index: 1;
        /* align-items:     ; */
    }

    .table-header{
        display: flex;
        justify-content: space-between;
        align-items: right;
        padding-bottom: 10px;
        width: 100%;
    }
    /* form {
        width: 100%;
        align-items: right;
        display: flex;

    } */

    table {
        z-index: 1;
    }
    tr {
        padding: 2px 4px;
        color: black;   
    }
    .tr-table {
        color: white;
    }



    .character-table-title {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        color: black;
    }
    .character-table {
        background-color: cornflowerblue;
        /* width: 100%; */
    }
    .table-body{
        background-color: white;
    }
    .table-title {
        display: flex;
        text-align: center;
        flex-direction: column;
        font-size: 25px;
        padding: 10px 20px 10px 20px;
        border: 2px solid black;
        border-radius: 20px;
        color: white;
        background-color: black;
    }
    .add-character {
        display: flex;
        align-items: center;
        text-align: center;
        padding: 5px 10px 5px 10px;
        font-size: 20px;
        color: black;
        /* width: 3%; */
        border: 1px solid black;
        border-radius: 10px;
        justify-content: center;
        background-color: white;
    }
    table td{
        padding: 0.5em 1em;
    }

    .tButton {
        cursor: pointer;
    }
    button{
        text-decoration: none;
        color: black;
        border: 2px solid rgba(255, 255, 255, 0.199);
        background-color: white;
        font-weight: 600;
        cursor: pointer ;
    }
    p {
        color: white;
        justify-content: space-between;
    }

    .page {
        justify-content: space-between;
        align-items: center;
        text-align: center;
        padding-top: 5%;
    }


    .page-num {
        justify-content: space-between;
    }
    .page-num a{
        color: white;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="./myDatePicker/mydatepicker.js"></script> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Aditya</title>
</head>
<body>
    <div class="loader-section" id="loader">
        <div class="loader"></div>
        </div> 
    <div class="body">
        <div class="character-table-box" id="characterTable">
            <div class="character-table-title">
                <p class="table-title">Obat Data</p>
            </div>
            <div class="table-header">
                <a class="add-character" href="route.php?action=new-obat">Add</a>
                    <div class="input-section"> 
                        <input type="text" id="search-input" name="search-input" placeholder="Search">
                        <button  onclick="searchOData()">Search</button>
                    </div>
            </div>
            <table class="character-table" border="1" cellpadding="0" cellspacing="0">
                <thead>
                        <tr class="tr-table">
                            <th width="5%">No</th>
                            <th width="15%">Nama Obat</th>
                            <th width="10%">Harga Obat</th>
                            <th width="8%">Stock</th>
                            <th width="10%">Last Modified</th>
                            <th width="5%">Delete</th>
                            <th width="5%">Modify</th>
                            <th width="10%">Jenis</th>
                        </tr>
                </thead>
                <tbody id="tableBody" class="table-body">
                    <?php 
                    $no = 1;
                    while($getData = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <th width="5%"><?php echo $no++; ?></th>
                            <th width="15%"><?php echo $getData['nama_obat']; ?></th>
                            <th width="10%"><?php echo $getData['harga_obat']; ?></th>
                            <th width="8%"><?php echo $getData['stock']; ?></th>
                            <th width="10%"><?php echo $getData['deleted_at']; ?></th>
                            <th width="5%"><button onclick="deleteData('<?php echo $getData['id_obat']; ?>')">Delete</button></th>
                            <th width="5%"><button onclick="modifyData('<?php echo $getData['id_obat']; ?>')">Edit</button></th>
                            <th width="10%"><?php 
                            if ($getData['jenis'] == 'NULL' || $getData['jenis'] == '' ){
                                echo '-';
                            } else {
                                echo $getData['jenis']; 
                            }
                                ?>
                            </th>
                        </tr>
                    <?php
                    };
                    ?>
                    
                </tbody>
            </table>
            <div class="page">
                <p>Halaman Sekarang: <?=$halamansekarang+1 ?></p>
                <p >Page</p>
                <p class="page-num"> <?php 
                if (isset($jumlahhalaman)) {
                    for($i=0; $i<=$jumlahhalaman;  $i++){
                    ?><a href='./route.php?action=obat-data&halaman=<?=$i?>'><?=$i+1?></a> <?php
                    }
                } else {
                    echo "Error ";
                }
                    ?> </p>
            </div>
            </div>

        </div>

    </div>
</div>
</body>
<footer></footer>
<script>
    const characterTable = document.getElementById('tableBody');
    let tableIndex = 1;
    function addCharacter(number, nama, harga, stock, last_modified, deleteF, modify){
        const newRow = document.createElement('tr');
        const newCol = document.createElement('td');
        newCol.innerHTML = number;

        const newNama = document.createElement('td');
        newNama.innerHTML = nama.value;

        const newHarga = document.createElement('td');
        newHarga.innerHTML = harga.value;

        const newStock = document.createElement('td');
        newStock.innerHTML = stock.value;

        const newLastmodified = document.createElement('td');
        newLastmodified.innerHTML = last_modified.value;

        const newModify = document.createElement('td');
        newLastmodified.innerHTML = modify.value;

        const newDelete = document.createElement('td');
        const newdeleteButton = document.createElement('DButton')
        newdeleteButton.classList.add('tButton');
        newdeleteButton.innerHTML = "Delete";
        newdeleteButton.addEventListener('click', ()=>{
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    newRow.remove();
                    swalWithBootstrapButtons.fire({
                    title: "Deleted!",
                    text: `Character ${newName.innerHTML} has been deleted`,
                    icon: "success"
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Nothing Changed",
                    icon: "error"
                    });
                }
            });
            
        });
        newDelete.appendChild(newdeleteButton);

        newRow.appendChild(newCol);
        newRow.appendChild(newNama);
        newRow.appendChild(newHarga);
        newRow.appendChild(newStock);
        newRow.appendChild(newLastmodified);
        newRow.appendChild(newDelete);
        newRow.appendChild(newModify);

        characterTable.appendChild(newRow);
    }
    
    function modifyData(id){
       location.href="./route.php?action=modify-obat&id=" + id;
        // alert('error'); 
    }
    function deleteData(id){
       location.href="./route.php?action=delete-obat&id=" + id;
        // alert('error'); 
    }
    function searchOData(){
        const nilai_search = document.getElementById("search-input").value;
        location.href="./route.php?action=obat-data&nama=" + nilai_search;
        // alert('error'); 
    }
    
    document.addEventListener("DOMContentLoaded", ()=> {
        setTimeout(() => {
            document.querySelector(".loader-section").classList.add("loader-hidden");
            document.querySelector(".loader-section").addEventListener("transitionend", ()=> {
                document.body.removeChild(document.querySelector(".loader-section"));
            
            }, 300);
        });
    });

</script>
<?php 


?>
</html>