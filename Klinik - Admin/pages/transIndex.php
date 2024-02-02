<!DOCTYPE html>
<html lang="en">
    <!-- <link rel="stylesheet" href="./myDatePicker/mydatepicker.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        flex-direction: row;
        /* justify-content: space-between; */
        align-items: center;
        gap: 20px;
        width: 100%;
    }
    .input-section {
        display: flex;
        /* width: 20%; */
        font-size: 20px;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 15px;
        color: black;
    }
    /* .search-button{
        background-color: cornflowerblue;
        border: 2px solid cornflowerblue;
        color: white;
    } */
    input[type="text"], select, textarea, input[type="date"] {
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
        width: 100%;
        flex-direction: row;
        justify-content: space-between;
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
        padding: 20px 0px 10px;
        width: 100%;
    }
    form {
        width: 100%;
        align-items: right;
        display: flex;
        flex-direction: column;

    }

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
        padding: 5px 10px 5px 10px;
        text-align: center;
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
        text-align: center;
    }
    
    .tButton {
        cursor: pointer;
    }
    button{
        text-decoration: none;
        padding: 5px 10px 5px 10px;
        color: black;
        border: 2px solid rgba(255, 255, 255, 0.199);
        background-color: white;
        font-weight: 600;
        font-size: 20px;
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
    

    /* .login-section {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: left;
        gap: 20px;
        width: 30%;
    } */

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Klinik Aditya</title>
</head>
<body>
    <div class="loader-section" id="loader">
        <div class="loader"></div>
        </div> 
    <div class="body">
        <div class="character-table-box" id="characterTable">
            <div class="character-table-title">
                <p class="table-title">Trans Data</p>
            </div>
            <!-- <form method="post" id="tambah-trans" name="tambah-trans" action="./route.php?action=tambah-trans"> -->
                <div class="table-header">
                    <div class="login-section">
                        <div class="input-section">
                            <label>Tanggal Awal</label>
                            <input type="date" id="tanggal_awal" name="tanggal_awal" class="tanggalinputbox" value="<?php echo date('d-m-Y'); ?>"/>
                            <input type="hidden" id="nomorIndex" name="nomorIndex" readonly >  
                            <label>Tanggal Akhir</label>
                            <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="tanggalinputbox" value="<?php echo date('d-m-Y'); ?>">  

                        </div>
                        <div class="search-button">
                            <button id="searchclickbutton">Search</button>
                        </div> 
                        <div class="add-button">
                            <a href="route.php?action=new-trans">
                                <button id="addclickbutton">Add Data</button>
                            </a>
                        </div> 
                        
                    </div>
                    <!-- <div class="input-section"> 
                        <input type="text" id="search-input" name="search-input" placeholder="Search" value="<?php echo isset($_GET['id_trans'])? $_GET['id_trans'] :  '';?>">
                        <button  onclick="searchTData()">Search</button>
                    </div> -->
                </div>
                
                <table class="character-table" border="1" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr class="tr-table">
                            <th width="2%">#</th>
                            <th width="5%">No</th>
                            <th width="15%">Id Trans</th>
                            <th width="8%">Tanggal</th>
                            <th width="10%">Total Qty</th>
                            <th width="10%">Total</th>
                            <th width="5%">Delete</th>
                            <th width="5%">Modify</th>
                            <!-- <th width="10%">Jenis</th> -->
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="table-body">
                        <?php 
                        $no = 1;
                        while($getData = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <th width="2%">
                                    <div class="droptable" id="droptable">
                                        <!-- <button id="dropdown-button" onclick="showDetail('<?php echo $getData['id_trans']; ?>')">  -->
                                        <button class="dropdown-button" id="dropdown-button" name="<?= $getData['id_trans'] ?>" onclick="DetailData(this,'<?= $getData['id_trans']; ?>')"> 
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                    </div>
                                </th>
                                <th width="5%"><?php echo $no++; ?></th>
                                <th width="15%"><?php echo $getData['id_trans']; ?></th>
                                <th width="20%"><?php 
                                $orgDate = $getData['tanggal']; 
                                $newDate = date("d-m-Y", strtotime($orgDate));
                                echo $newDate;
                                ?></th>
                                <th width="10%"><?php echo number_format($getData['total_qty'], 0, ' ','.'); ?></th>
                                <th width="10%"><?php echo number_format($getData['total'], 0 , ' ', '.'); ?></th>
                                <th width="5%"><button onclick="deleteTransData('<?php echo $getData['id_trans']; ?>')">Delete</button></th>
                                <th width="5%"><button onclick="modifyTransData('<?php echo $getData['id_trans']; ?>')">Edit</button></th>

                            </tr>
                            <!-- <tr class="detail-data" id="detail-<?php echo $getData['id_trans']; ?>" style="display: none;">
                                <th width="5%" colspan="2">ID det</th>
                                <th width="10%" >ID trans</th>
                                <th width="10%" >Obat</th>
                                <th width="10%">Qty</th>
                                <th width="10%">Harga</th>
                                <th width="5%" colspan="4">Subtotal</th>
                            </tr> -->
                            <!-- <tr class="detail-data-obat" id="detail-obat-<?php echo $getData['id_trans']; ?>" style="display: none;" > -->
                                <!-- <td width="5%" colspan="2"><?php echo $getData['id_obat']; ?></td> -->
                                <!-- <td width="10%"><?php echo $getData['qty']; ?></td> -->
                                <!-- <th width="10%"><?php echo $getData['harga']; ?></th> -->
                                <!-- <th width="10%" colspan="4"><?php echo $getData['subtotal']; ?></th> -->
                            <!-- </tr> -->
                            <!-- <tr class="detailRow" style="display:none;">
                                <td colspan="8" class="detailCell">

                                </td>
                            </tr> -->
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
                        for($i=0; $i< $jumlahhalaman;  $i++){
                        ?><a href='./route.php?action=trans-data&halaman=<?=$i?>&tanggal_awal=<?= isset($_GET['tanggal_awal'])? $_GET['tanggal_awal']: date('d-m-Y') ?>&tanggal_akhir=<?= isset($_GET['tanggal_akhir'])? $_GET['tanggal_akhir']: date('d-m-Y') ?>'><?=$i+1?></a> <?php 
                        }
                    } else {
                        echo "Error ";
                    }
                        ?> </p>
                </div>
                <!-- <button type="button" onclick = "save()" class="saveclickbutton" id="saveclickbutton">Save</button> -->
            <!-- </form> -->
        
    </div>
    
</div>

    </div>
</div>
</body>
<footer></footer>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    // const datenow = document.getElementById('tanggal_awal').valueAsDate = new date();
    const characterTable = document.getElementById('tableBody');
    let tableIndex = 1;
    function addCharacter(number, id_trans, tanggal, total_qty, total_harga , deleteF, modify){
        const newRow = document.createElement('tr');
        const newCol = document.createElement('td');
        newCol.innerHTML = number;

        const newIdtrans = document.createElement('td');
        newIdtrans.innerHTML = id_trans.value;

        const newTanggal = document.createElement('td');
        newTanggal.innerHTML = tanggal.value;

        const newTotalqty = document.createElement('td');
        newTotalharga.innerHTML = total_qty.value;
        
        const newTotalharga = document.createElement('td');
        newTotalharga.innerHTML = total_harga.value;

        // const newLastmodified = document.createElement('td');
        // newLastmodified.innerHTML = last_modified.value;

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
                    text: `Data ${newIdtrans.innerHTML} has been deleted`,
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
        newRow.appendChild(newIdtrans);
        newRow.appendChild(newTanggal);
        newRow.appendChild(newTotalqty);
        newRow.appendChild(newTotalharga);
        // newRow.appendChild(newLastmodified);
        newRow.appendChild(newDelete);
        newRow.appendChild(newModify);

        characterTable.appendChild(newRow);
    }

    const searchTanggal = document.getElementById('searchclickbutton');
    const tanggalawalInput = document.getElementById('tanggal_awal');
    const tanggalakhirInput = document.getElementById('tanggal_akhir');
    searchTanggal.addEventListener('click', function(event){
        event.preventDefault();
        // function searchTData(){
            const nilai_search_awal = document.getElementById("tanggal_awal").value;
            const nilai_search_akhir = document.getElementById("tanggal_akhir").value;
            if (nilai_search_awal != '' && nilai_search_akhir == ''){
                location.href="./route.php?action=trans-data&tanggal_awal=" + nilai_search_awal;
                
            } else if (nilai_search_akhir != '' && nilai_search_awal == ''){
                location.href="./route.php?action=trans-data&tanggal_akhir=" + nilai_search_akhir;
                
            } else if (nilai_search_akhir != '' && nilai_search_awal != ''){
                location.href="./route.php?action=trans-data&tanggal_awal=" + nilai_search_awal +"&tanggal_akhir="+ nilai_search_akhir;
    
            } else {
                alert("Tolong isi tanggal terlebih dahulu!")
            };
            // alert('error'); 
        // }
        
    });
    tanggalawalInput.value = "<?= isset($_GET['tanggal_awal'])? $_GET['tanggal_awal']: date('d-m-Y');?>"
    tanggalakhirInput.value = "<?= isset($_GET['tanggal_akhir'])? $_GET['tanggal_akhir']: date('d-m-Y');?>"
    function deleteTransData(id){
       location.href="./route.php?action=delete-trans&id=" + id;
        // alert('error'); 
    }
    function modifyTransData(id){
       location.href="./route.php?action=modify-trans&id=" + id;
        // alert('error'); 
    }

    function DetailData(button, id_master) {
        
        if(button.getAttribute('detail-show') === 'true'){
            // var detailShown = button.getAttribute('detail-show');
            var newRow = document.getElementById('detailRow'+ id_master);
            if(newRow) {
                newRow.style.display = newRow.style.display === 'none'? '':'none';
            } else {
                console.error('Element with id detailRow ' + id_master + ' does not exist.');
            }
            return;

        }
        var tableContain = button.closest('tr');
        var table = tableContain.closest('table');
        var detailRow = table.insertRow(tableContain.rowIndex+1);
        detailRow.setAttribute('id','detailRow'+id_master);

        var detailCol =detailRow.insertCell(0);
        detailCol.colSpan = tableContain.cells.length;

        button.setAttribute('detail-show','true');

        getDetaildata(id_master, detailCol);
    } 

    function getDetaildata(id_master, detailCol){
        fetch('http://localhost/wh-klini-aditya/Klinik%20-%20Admin/route.php?action=search-trans-detail&id_master=' + id_master)
        .then(response => response.json())
        .then(data => {
            console.log(JSON.parse(data));
            var newTableData = `
                <table class="table-detail" style="border:1px solid black; width:100%;">
                    <thead >
                        <tr>
                            <th width="5%" colspan="2" style="border:1px solid black;" >ID det</th>
                            <th width="10%" style="border:1px solid black;">ID trans</th>
                            <th width="10%" style="border:1px solid black;">Obat</th>
                            <th width="10%" style="border:1px solid black;">Qty</th>
                            <th width="10%" style="border:1px solid black;">Harga</th>
                            <th width="5%" colspan="2" style="border:1px solid black;">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>`;
                    let hasil = JSON.parse(data);
            if (Array.isArray(hasil)) {
                if (hasil == ''){
                    newTableData += '<tr><td colspan="100%">No detail data available</td></tr>';
                } else {
                    hasil.forEach(row => {
                        newTableData += `
                            <tr>
                                <td width="5%" colspan="2" style="border:1px solid black;">${row.id_det}</td>
                                <td width="10%" style="border:1px solid black;">${row.id_trans}</td>
                                <td width="10%" style="border:1px solid black;">${row.nama_obat}</td>
                                <td width="10%" style="border:1px solid black;">${row.qty}</td>
                                <td width="10%" style="border:1px solid black;">${row.harga}</td>
                                <td width="5%" colspan="4" style="border:1px solid black;">${row.subtotal}</td>
                            </tr>
                            `;
                        });

                }
            } else {
                newTableData += '<tr><td colspan="100%">No detail data available</td></tr>';
                console.error('Data received is not an array:', error);
            }
            
            newTableData += '</tbody></table>';
            detailCol.innerHTML = newTableData;
                
            })
        .catch(error => {
            console.error('Error Loading Details', error);
        });
    }



    document.addEventListener("DOMContentLoaded", ()=> {
        setTimeout(() => {
            document.querySelector(".loader-section").classList.add("loader-hidden");
            // document.querySelector(".loader-section").addEventListener("transitionend", ()=> {
                //     document.body.removeChild(document.querySelector(".loader-section"));
                
            // }, 300);
        });

        
    });
    
</script>
<?php 


?>
</html>