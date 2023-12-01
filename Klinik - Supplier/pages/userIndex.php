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
    border: none;
    background-color: white;
    left: 8%;
    position: relative;
    color: 34afb0;
    font-size: 17px;
}
.text-input{
    border-radius: 8px;
    position: relative;
    left: 75%;
}
.search{
    position: relative;
    left: 76%;
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
    padding: 10px;
}

</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
    <div class = "container">
        <div class="title"><strong>USER DATA</strong></div>
        <div class="section">
            <button class="add" id="add-button" ><strong>ADD</strong></button>
            <input type="text" class ="text-input" placeholder="username">
            <button class="search" id="search-button"><strong>SEARCH</strong></button>
        </div>
       
            <table >
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Last Modified</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
            <?php
                include 'koneksi.php';
                $no = 1;
                while($db = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $db ['nama'];?></td>
                            <td><?php echo $db ['username'];?></td>
                            <td><?php echo $db ['pass'];?></td>
                            <td></td>
                            <td><a href="edit.php">Edit</a></td>
                            <td><a href="delete.php">Delete</a></td>
                        </tr>
            <?php
                }
            ?>
            </table>

    </div>
</body>
</html>