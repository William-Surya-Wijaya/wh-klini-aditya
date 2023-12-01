<?php 
include ("koneksi.php");
$id = $_GET['id_user'];
mysqli_query($koneksi,"delete from user where id_user = '$id'");

?>