
<style>
@font-face {
font-family: lora;
src: url(./LORA.ttf);
}

@font-face {
font-family: arone;
src: url(./ARONE.ttf);
}

* {
padding: 0;
margin: 0;
font-family: lora ;
color: white;
}

body{
margin: 0;
overflow: hidden;
}

.title{
  color: black;
  display: flex;
  justify-content: center;
  text-align: center;
  font-size: 28px;
  font-weight: bold;
}

.background{
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-size: cover;
background-position: center;
background-repeat: no-repeat;
filter: blur(5px);
z-index: -1;
}

.container {
position: relative;
z-index: 99;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
gap: 50px;
height: 100vh;
overflow: hidden;
backdrop-filter: blur(0px);
z-index: 1;
padding: 30px 40px 30px 30px;

}


.edit-section{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center; 
gap: 20px;
border-radius: 20px;
background-color: black;
}

.label{
font-weight: 600;
}

.pre-loader{
position: fixed;
z-index: 99;
background-color: rgb(0, 0, 0);
opacity: 1;
width: 100%;
height: 100%;
display: flex;
gap: 15px;
flex-direction: column;
justify-content: center;
align-items: center;
transition: all .5s ease-in-out;
}


.loader{
border: 10px solid #f3f3f3;
border-top: 10px solid #3498db;
border-radius: 50%;
width: 40px;
height: 40px;
animation: spin 1s linear infinite;
}

.loader-text{
color: beige;
font-size: 20px;
text-shadow: burlywood;
}

.pre-loader.hide{
opacity: 0;
}

@keyframes spin {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}

.edit-section form{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
gap: 20px;
padding: 2em 4em;
border-radius: 20px;
}

.form-group{
width: 100%;
display: flex;
flex-direction: column;
gap: 8px;
}

.form-group label{
font-size: 20px;
}

.form-group input{
background-color: transparent;
border: 3px solid rgba(255, 228, 196, 0.842);
border-radius: 5px;
font-size: 18px;
padding: 8px;
}

.form-button button{
border: 3px solid rgba(255, 228, 196, 0.842);
border-radius: 5px;
background-color: transparent;
font-size: 16px;
padding: 10px 15px;
transition: 0.5s ease-in-out;
}

.form-button button:hover{
border: 1px solid rgba(255, 255, 255, 1);
}

.form-group select {
    background-color: transparent;
    border: 3px solid rgba(255, 228, 196, 0.842);
    border-radius: 5px;
    font-size: 18px;
    padding: 8px;
    width: 100%; 
}

.form-group select option {
    background-color: black;
    color: white;
}

.form-group select option:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.swal-popup {
border: 1px solid rgba(255, 255, 255, 0.473);
background-color: black;
color: white;
}

footer{
display: flex;
justify-content: center;
flex-direction: column;
}

.footer-logo{
display: flex;
justify-content: center;
flex-direction: row;
width: 10vw;
height: 100%;
gap: 15px;
aspect-ratio: 64/34;
padding-top: 70px;

}

.footer-link{
display: flex;
justify-content: center;
flex-direction: row;
gap: 25px;
padding: 15px;
}

.f-link{
color: white;
text-decoration: none;
font-family: arone;
}


</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit User</title>
</head>
<body>
    <div class="container">
    <div class="title">Edit User</div>
        <div class="edit-section">
            <form  method="POST" name="edit-form" id="edit-form" action="./route.php?action=edit-data" <?php $var = mysqli_fetch_array($result)?>>

            <div class="form-group">
                    <label for=""></label>
                    <input type="hidden" id="" name="id" autocomplete="off" value = <?= $var["id_user"]?>>
                </div>

            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" id="name" name="name" autocomplete="off"value = <?= $var["nama"]?> >
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" id="username" name="username" autocomplete="off" value = <?= $var["username"]?>>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" id="password" name="password" autocomplete="off" value = <?= $var["pass"]?>>
                </div>

                <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" id="role" autocomplete="off">
                      <option value="admin">Admin</option>
                      <option value="member">Member</option>
                      <option value="superadmin">SuperAdmin</option>
                      <option value="vip">VIP</option>
                    </select>
                </div>

                <div class="form-button">
                    <button id="edit">edit</button>
                </div>
            </form>
        </div>
       <div class="pre-loader">
        <div class="loader"></div>
        <div class="loader-text">Loading...</div>
      </div>
    </div>
    
</body>
</html>

<!--IMPORT DATE PICKER-->
<script src="../library/myDatePicker/mydatepicker.js"></script>
<link rel="stylesheet" href="../library/myDatePicker/mydatepicker.css">
<!---->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    

    const nameInput = document.getElementById('name');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const konfirmpassInput = document.getElementById('kpass');
    const editButton = document.getElementById('edit');
    const editForm = document.getElementById('edit-form');

    editButton.addEventListener('click', (event)=>{
      event.preventDefault()
      var lowerCaseLetters = /[a-z]/g;
      var upperCaseLetters = /[A-Z]/g;
      var numbers = /[0-9]/g;

      if(nameInput.value == ""){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Please Fill your name",
          showConfirmButton: false,
          timer: 1500,
        });
      }else if(usernameInput.value == ""){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Please Fill your username",
          showConfirmButton: false,
          timer: 1500,
        });
      }else if(usernameInput.value.length < 8){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Username must be at least 8 characters",
          showConfirmButton: false,
          timer: 1500,
        });
      }else if(passwordInput.value == ""){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Please Fill your password",
          showConfirmButton: false,
          timer: 1500,
        });
      }else if(passwordInput.value.length < 8){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Password must be at least 8 character",
          showConfirmButton: false,
          timer: 1500,
        });
      }else if(!upperCaseLetters.test(passwordInput.value)){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Password must be at least 1 character upperCaseLetter",
          showConfirmButton: false,
          timer: 1500,
        });
      }else if(!lowerCaseLetters.test(passwordInput.value)){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Password must be at least 1 character lowerCaseLetter",
          showConfirmButton: false,
          timer: 1500,
        });
      }else if(!numbers.test(passwordInput.value)){
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Password must be at least 1 numbers",
          showConfirmButton: false,
          timer: 1500,
        });
      }else {
        Swal.fire({
          icon: "success",
          title: "edit Success !",
          showConfirmButton: false,
          timer: 1500,
        });
        setTimeout(()=>{
          editForm.submit();
        }, 1500);
      }
    });

    document.addEventListener("DOMContentLoaded", function() {
      setTimeout(()=>{
        document.querySelector('.pre-loader').classList.add('hide');
        setTimeout(()=>{
          document.querySelector('.pre-loader').style.display="none";
        }, 500);
      }, 500);
    });





  </script>