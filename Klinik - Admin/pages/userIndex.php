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
        width: 22%;
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
    input[type="text"], select, textarea {
        background-color: black;
        color: white;
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
    /* button:hover {
        color: white;
        background-color: transparent;
        border: 2px solid white;
        
    }
    button{

        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: black;
        padding: 5px 15px 5px 15px;
        border: 2px solid rgba(255, 255, 255, 0.199);
        width: 100%;
        transition: all .5s ease-in-out;
    } */
    /* nav {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    } */
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
        transition: all .35s,3s ease-in-out;
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
        padding-right: 8px;
        width: 80%;
        flex-direction: column;
        justify-content: left;
        color :aliceblue;
        font-weight: 500;
        height: 100%;
        max-height: 100%;
        overflow: auto;
        /* align-items:     ; */
    }
    table th {
        padding: 2px 4px;
        color: black;
    }

    .character-table-title {
        align-items: center;
        text-align: center;
        padding-bottom: 10px;
        font-size: 25px;
        color: black;
    }
    .add-character {
        align-items: left;
        /* text-align: center; */
        /* padding-bottom: 10px; */
        font-size: 20px;
        color: black;
        width: 3%;
    }
    table td{
        padding: 0.5em 1em;
    }

    .tButton {
        cursor: pointer;
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
    <div class="body">
        <div class="character-table-box" id="characterTable">
            <div class="character-table-title">User Data</div>
            <a class="add-character" href="route.php?action=new-user">Add</a>
            <table class="character-table" border="1" cellpadding="0" cellspacing="0">
                <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">Name</th>
                            <th width="20%">Username</th>
                            <th width="18%">Kata Sandi</th>
                            <th width="18%">Last Modified</th>
                            <th width="10%">Delete</th>
                            <th width="15%">Modify</th>
                        </tr>
                    <?php
                    ?>
                </thead>
                <tbody id="tableBody">
                    <?php 
                    $no = 1;
                    while($getData = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <th width="5%"><?php echo $no++; ?></th>
                            <th width="20%"><?php echo $getData['nama']; ?></th>
                            <th width="20%"><?php echo $getData['username']; ?></th>
                            <th width="18%"><?php echo $getData['pass']; ?></th>
                            <th width="18%"><?php echo $getData['deleted_at']; ?></th>
                            <th width="10%">Delete</th>
                            <th width="15%">Edit</th>
                        </tr>
                    <?php
                    }
                    ?>
                    
                    ?>
                </tbody>
            </table>
            </div>

        </div>
        <!-- <div class="loader-section" id="loader">
            <div class="loader"></div>
        </div> -->
    </div>
</div>
</body>
<script>
    const characterTable = document.getElementById('tableBody');
    let tableIndex = 1;
    function addCharacter(number, name, username, kata_sandi, last_modified, delete, modify){
        const newRow = document.createElement('tr');
        const newCol = document.createElement('td');
        newCol.innerHTML = number;

        const newName = document.createElement('td');
        newName.innerHTML = name.value;

        const newUsername = document.createElement('td');
        newUsername.innerHTML = username.value;

        const newKatasandi = document.createElement('td');
        newKatasandi.innerHTML = kata_sandi.value;

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
        newRow.appendChild(newName);
        newRow.appendChild(newUsername);
        newRow.appendChild(newKatasandi);
        newRow.appendChild(newLastmodified);
        newRow.appendChild(newDelete);
        newRow.appendChild(newModify);

        characterTable.appendChild(newRow);
    }
    

    
</script>
<?php 


?>
</html>