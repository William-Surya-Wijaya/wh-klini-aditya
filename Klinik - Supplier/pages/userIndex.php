<style>
* {
padding: 0;
margin: 0;
}
.container{
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.title{
    color: 34afb0;
    padding: 1em;
    font-size: 20px;
}
.section{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    padding-bottom: 35px;
}
.add{
    position: relative;
    left:8%;
}

.add-button{
    border: none;
    background-color: white;
    color: 34afb0;
    font-size: 17px;
}
.add-button:hover {
    background-color: black;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    color: white;
}

.text-input{
    border-radius: 8px;
    position: relative;
    left: 73%;
}
.search{
    position: relative;
    left: 75%;
    border: none;
    background-color: white;
    color: 34afb0;
    font-size: 17px;
}
table{
    border: 1px solid white;
    cellspacing: 10px;
    cellpadding: 10px;
    width: 80%;
    border-radius: 10px;
    position: relative;
    left: 9%;
    background-color: 34afb0;
    color: white;
    font-size: 18px;
    text-align: center;
    border-collapse: collapse;
}
table th, td{
    border: 1px solid white;
    padding: 5px;
}

button{
    background-color: 34afb0;
    border: none;
    color: white;
}
button:hover{
    border-bottom: 1px solid black;
    transition: transition: all 0.3s ease-in-out;
    cursor: pointer;
}
.pagination {
    margin-top: 20px;
}


</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class = "container">
        <div class="title"><strong>USER DATA</strong></div>
        <div class="section">
        <a class="add" href="./route.php?action=addUser">
            <button class="add-button"><strong>ADD</strong></button>
        </a>
        <input type="text" id="searchInput" class="text-input" placeholder="Search by username">
        <button onclick="performSearch()" class="search" id="search-button"><strong>SEARCH</strong></button>

        </div>
       
            <table >
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Last Modified</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
            <?php
                include 'koneksi.php';
                $no = 5 * $number + 1;
                while($db = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $db ['nama'];?></td>
                            <td><?php echo $db ['username'];?></td>
                            <td><?php echo $db ['pass'];?></td>
                            <td></td>
                            <td></td>
                            <td><button onclick="modifyData('<?php echo $db ['id_user']?>');">Edit</button></td>
                            <td><button onclick="deleteData('<?php echo $db['id_user']?>');">Delete</button></td>
                        </tr>
            <?php
                }
            ?>
            <script>
                function modifyData(id){
                    location.href="./route.php?action=editUser&id="+id;
            }

                function deleteData(id) {
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak akan dapat mengembalikan data ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = "./route.php?action=deleteUser&id=" + id;
                    }
                });

            }

            function performSearch() {
                var searchValue = document.getElementById("searchInput").value;
                location.href = "./route.php?action=user-data&search=" + searchValue;
            }

            
            </script>
            </table>

<!-- PAGINATION -->
            <div class = "pagination">
                <p>Halaman Saat ini : <?= $number + 1?></p>
                <p>Page : <?php if(isset($halaman)){
                    for($i = 0; $i < $halaman; $i++){
                        ?>
                        <a href="./route.php?action=user-data&halaman=<?=$i?>"><?=$i+1?></a>
                        <?php
                    }
                    }?></p>
            </div>
    </div>
</body>
</html>