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
    input[type="text"], input[type="password"], textarea {
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
        transition: all .35s,2s ease-in-out;
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
                <form method="post" id="edit-user" name="edit-user" action="./route.php?action=edit-user">
                    <div class="input-section"> <?php 
                    $result = mysqli_fetch_array($result);
                    ?>
                        <label>Nama</label>
                        <input type="hidden" id="id" name="id" value="<?= $result["id_user"] ?>">
                        <input type="text" id="nama" name="nama" value="<?= $result["nama"] ?>">
                        <label>Username</label>
                        <input type="text" id="username" name="username" value="<?= $result["username"] ?>">
                        <label>Password</label>
                        <input type="password" id="password" name="pass" value="<?= $result["pass"] ?>">

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
    const namaInput = document.getElementById('nama');
    const birthdateInput = document.getElementById('birthdate');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const loginButton = document.getElementById('loginclickbutton');

    const formRegister = document.getElementById('edit-user');

    // if(usernameInput.length < 8){
    //     Swal.fire({
    //             icon: "error",
    //             title: "Oops...",
    //             text: "Something went wrong!",
    //             footer: '<a href="#">Minimal 8 character!</a>'
    //         });
    // }


    loginButton.addEventListener('click', ()=>{
        var lowerCaseLetters = /[a-z]/g;
        var upperCaseLetters = /[A-Z]/g;
        var numbers = /[0-9]/g;
        event.preventDefault();
        if(namaInput.value==""){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Tolong isi nama terlebih dahulu</a>'
            });
        }
        else if(usernameInput.value==""){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Tolong isi username terlebih dahulu</a>'
            });
        }
        else if(usernameInput.value.length < 8){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Minimal 8 character!</a>'
            });
        }
        else if(passwordInput.value==""){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Tolong isi password anda</a>'
            });
        }
        else if(passwordInput.value.length < 8){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Minimal 8 character!</a>'
            });
        }
        else if(!lowerCaseLetters.test(passwordInput.value)){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Harus memiliki setidaknya satu huruf kecil</a>'
            });
        }
        else if(!upperCaseLetters.test(passwordInput.value)){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Harus memiliki setidaknya satu huruf besar</a>'
            });
        }
        else if(!numbers.test(passwordInput.value)){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Harus memiliki setidaknya satu angka</a>'
            });
        }
        else {
            Swal.fire({
                title: "Success",
                text: "User berhasil ditambah!",
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