<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style >
     @font-face {
        font-family: arone;
        src: url(./pages/ARONE.ttf);
    }
    * {
        padding: 0;
        margin: 0;
        font-family: arone ;
    }
    .body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: white;
        gap :50px;
        height: 81vh;
        overflow:hidden;

    }

    a {
        text-decoration: none;
        color: black;
    }
    .login-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        width: 30%;
    }
    .input-section {
        display: flex;
        width: 100%;
        font-size: 20px;
        flex-direction: column;
        justify-content: center;
        align-items: left;
        gap: 15px;
        color: black;
    }
    input[type="text"], input[type="password"], textarea, select, option {
        background-color: white;
        color: black;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px 10px 10px 10px;
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
    button:hover {
        color: black;
        background-color: transparent;
        border: 2px solid black;
        
    }
    button{
        /* font-family: arone; */
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        background-color: white;
        padding: 5px 15px 5px 15px;
        border: 2px solid rgba(255, 255, 255, 0.199);
        width: 100%;
        transition: all .5s ease-in-out;
    }

    footer{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white;
        /* gap :50px; */
        height: 19vh;
        overflow: hidden;
    }
    .footer-section {
        color: black;
        flex-direction: column;
        background-color: white;
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
        z-index: 11;
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
        z-index: 11;
        transition: all .35s,1s ease-in-out;
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

   
    .header {
        color: white !important;
    }
    
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Aditya</title>
</head>
<body>
    <div class="body">
            <div class="login-section">
                <p class="title">Edit Data</p>
                <form method="post" id="edit-obat" name="edit-obat" action="./route.php?action=edit-obat">
                    <div class="input-section"> <?php 
                    $result = mysqli_fetch_array($result);
                    ?>
                        <label>Nama Obat</label>
                        <input type="hidden" id="id" name="id" value="<?= $result["id_obat"] ?>">
                        <input type="text" id="namaObat" name="namaObat" value="<?= $result["nama_obat"] ?>">
                        <label>Harga Obat</label>
                        <input type="text" id="hargaObat" name="hargaObat" value="<?= $result["harga_obat"] ?>">
                        <label>Stock</label>
                        <input type="text" id="stockObat" name="stockObat" value="<?= $result["stock"] ?>">
                        <label>Role</label>
                        <select class="jenis-select" id="jenis-select" name="jenis-select">
                            
                            <?php 
                            $id = 1;
                            $result2 = getJenisSelect($id);
                            foreach ($result2 as $jenis) { 
                            ?>
                                <option value="<?php echo $jenis['id_jenis']; ?>"<?=($jenis['id_jenis'] == $result["id_jenis"])? "selected":'' ?>><?php echo $jenis['jenis']; ?></option>
                            <?php
                            } 
                            ?>
                        </select>

                    </div>
                    <div class="login-button">
                        <button id="loginclickbutton">Ubah</button>
                        <!-- <input type="submit" value="Login"> -->
                    </div> 
                </form>
            </div>
            <div class="loader-section" id="loader">
                <div class="loader"></div>
            </div>
        </div>
    
</body>
<script>
    const obatInput = document.getElementById('namaObat');
    const hargaInput = document.getElementById('hargaObat');
    const stockInput = document.getElementById('stockObat');
    const loginButton = document.getElementById('loginclickbutton');

    const formRegister = document.getElementById('edit-obat');

    loginButton.addEventListener('click', ()=>{
        var lowerCaseLetters = /[a-z]/g;
        var upperCaseLetters = /[A-Z]/g;
        var numbers = /[0-9]/g;
        if(obatInput.value==""){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Tolong isi nama obat terlebih dahulu</a>'
            });
        }
        else if(!numbers.test(hargaInput.value)){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Hanya boleh diisi dengan angka</a>'
            });
        }
        else if(hargaInput.value==""){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Tolong isi harga terlebih dahulu</a>'
            });
        }
        else if(!numbers.test(stockInput.value)){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Hanya boleh diisi dengan angka</a>'
            });
        }
        else if(stockInput.value==""){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Tolong isi stock terlebih dahulu</a>'
            });
        }
        else {
            Swal.fire({
                title: "Success",
                text: "Data Obat berhasil diubah!",
                icon: "success"
            });
            formRegister.submit();
        }
    })

   document.addEventListener("DOMContentLoaded", ()=> {
        setTimeout(() => {
            document.querySelector(".loader-section").classList.add("loader-hidden");
            document.querySelector(".loader-section").addEventListener("transitionend", ()=> {
                document.body.removeChild(document.querySelector(".loader-section"));
            
            }, 300);
        });
    });
</script>
</html>