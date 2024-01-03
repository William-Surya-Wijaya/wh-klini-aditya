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
        justify-content: space-between;
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
    /* .login-button{
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
            <div class="table-header">
                <!-- <a class="add-character" href="route.php?action=new-trans">Add</a> -->
                <div class="login-section">
                <form method="post" id="tambah-trans" name="tambah-trans" >
                    <div class="input-section">
                        <label>Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="tanggalinputbox">
                        <!-- <input type="hidden" id="tanggal-hidden" name="tanggal-hidden"> -->
                        <label>Total</label>
                        <input type="text" id="total" name="total" readonly>
                        <label>Total Qty</label>
                        <input type="text" id="qty" name="qty" readonly>
                    </div>
                    <div class="login-button">
                        <button id="loginclickbutton">Tambah</button>
                        <!-- <input type="submit" value="Login"> -->
                    </div> 
                </form>
            </div>
                    <!-- <div class="input-section"> 
                        <input type="text" id="search-input" name="search-input" placeholder="Search" value="<?php echo isset($_GET['id_trans'])? $_GET['id_trans'] :  '';?>">
                        <button  onclick="searchTData()">Search</button>
                    </div> -->
            </div>
            <table class="character-table" border="1" cellpadding="0" cellspacing="0">
                <thead>
                        <tr class="tr-table">
                            <th width="5%">No</th>
                            <th width="15%">Obat</th>
                            <th width="8%">Qty</th>
                            <th width="10%">Harga</th>
                            <th width="10%">Subtotal</th>
                            <th width="5%">Delete</th>
                            <!-- <th width="5%">Modify</th> -->
                            <!-- <th width="10%">Jenis</th> -->
                        </tr>
                </thead>
                <tbody id="tableBody" class="table-body"></tbody>
            </table>

            </div>

        </div>

    </div>
</div>
</body>
<footer></footer>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

    const characterTable = document.getElementById('tableBody');
    // const tanggalInput = document.getElementById('tanggal');
    // const totalInput = document.getElementById('total');
    // const qtyInput = document.getElementById('qty');

    document.addEventListener("DOMContentLoaded", ()=>{
            const loginButton = document.getElementById('loginclickbutton')
            loginButton.addEventListener('click', (event)=>{
                event.preventDefault();
                Swal.fire({
                    title: "Success",
                    text: "Added a New Data",
                    icon: "success"
                });
                addCharacter();
            });
    });
    // const formRegister = document.getElementById('tableBody');
    let tableIndex = 1;
    function addCharacter(number, obat, qty, harga, subtotal, deleteF){
        const newRow = document.createElement('tr');
        const newCol = document.createElement('td');
        newCol.textContent = tableIndex;
        
        const newObat = document.createElement('td');
        const newObatInput = document.createElement('input');
        
        newObatInput.type = 'text';
        newObatInput.autocomplete = 'off';
        newObatInput.name = 'newObatInput'+tableIndex;
        newObatInput.id = 'newObatInput'+tableIndex;
        newObatInput.classList.add('autoobatdata') ;
        newObat.appendChild(newObatInput);
        
        // autoObatData();
        // newObat.innerHTML = obat.value;
        
        const newqty = document.createElement('td');
        const newqtyInput = document.createElement('input');
        newqtyInput.type = 'text';
        newqtyInput.name = 'newqtyInput'+tableIndex;
        newqtyInput.id = 'newqtyInput'+tableIndex;
        newqty.appendChild(newqtyInput);
        // newqty.innerHTML = qty.value;
        
        const newHarga = document.createElement('td');
        const newHargaInput =document.createElement('input');
        newHargaInput.type = 'text';
        newHargaInput.name = 'newHargaInput';
        newHargaInput.id = 'newHargaInput'+tableIndex;
        newHargaInput.readOnly = true;
        newHarga.appendChild(newHargaInput);
        
        // newHarga.innerHTML = harga.value;
        
        const newSubtotal = document.createElement('td');
        const newSubtotalInput =document.createElement('input');
        newSubtotalInput.type = 'text';
        newSubtotalInput.readOnly = true;
        newSubtotalInput.name = 'newSubtotalInput';
        newSubtotalInput.id = 'newSubtotalInput'+tableIndex;
        newSubtotal.appendChild(newSubtotalInput);

        $(newqtyInput).keyup(function(e){
           var subtotal= newHargaInput.value * this.value;
           newSubtotalInput.value = subtotal;
        });


        $(newObatInput).autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "http://localhost/wh-klini-aditya/Klinik%20-%20Admin/route.php?action=search-auto-obat",
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
             minLength: 1,
                    select: function(event, ui) {
                        $.ajax({
                            url: "http://localhost/wh-klini-aditya/Klinik%20-%20Admin/route.php?action=search-harga-auto-obat&"+newHargaInput.value,
                            dataType: "json",
                            data: {
                                term: ui.item.value
                            },
                            success: function(data) {
                                // alert(tableIndex);
                                $('#newHargaInput'+(tableIndex-1)).val(data);
                                $('#newqtyInput'+(tableIndex-1)).val('1');
                                $('#newSubtotalInput'+(tableIndex-1)).val(data);
                                
                            },
                        });
                        
                        // $.ajax({
                        //     url: "http://localhost/wh-klini-aditya/Klinik%20-%20Admin/route.php?action=search-qty-auto-obat&"+newqtyInput.value,
                        //     dataType: "json",
                        //     data: {
                        //         term: ui.item.value
                        //     },
                        //     success: function(data) {
                        //         // alert(tableIndex);
                        //         $('#newqtyInput'+(tableIndex-1)).val(data);
                        //     },
                        // });

                        // $.ajax({
                        //     url: "http://localhost/wh-klini-aditya/Klinik%20-%20Admin/route.php?action=subtotal-auto-obat&"+newSubtotalInput.value,
                        //     dataType: "json",
                        //     data: {
                        //         term: ui.item.value
                        //     },
                        //     success: function(data) {
                        //         // alert(tableIndex);
                        //         $('#newSubtotalInput'+(tableIndex-1)).val(data);
                        //     }
                        // });
                // Koding disini mau ngapain, bisa ajax sekali lagi untuk ambil harga barang tersebut
                console.log("Selected: " + ui.item.value);
                }
        });
        
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
                        text: `Row has been deleted`,
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
        
        // const loginButton = document.getElementById('loginclickbutton');
        
  
        
    
    newDelete.appendChild(newdeleteButton);
    
    newRow.appendChild(newCol);
    newRow.appendChild(newObat);
    newRow.appendChild(newqty);
    newRow.appendChild(newHarga);
    newRow.appendChild(newSubtotal);
    newRow.appendChild(newDelete);
    // newRow.appendChild(newLastmodified);
    // newRow.appendChild(newModify);
    
    characterTable.appendChild(newRow);
    tableIndex++;
}
    function autoObatData(idInput) {
        // console.log(`#${idInput}`);
        
    };
    function autoObatData(idInput) {
        // console.log(`#${idInput}`);
        
    };

    // function modifyData(id){
    //    location.href="./route.php?action=modify-trans&id=" + id;
    //     // alert('error'); 
    // }
    // function deleteData(id){
    //    location.href="./route.php?action=delete-trans&id=" + id;
    //     // alert('error'); 
    // };
    // function searchTData(){
    //     const nilai_search = document.getElementById("search-input").value;
    //     location.href="./route.php?action=trans-data&id_trans=" + nilai_search;
    //     // alert('error'); 
    // };

    
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