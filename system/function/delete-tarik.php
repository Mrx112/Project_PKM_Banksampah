<?php
 require_once("../config/koneksi.php");
 $id = $_GET['id'];
 $query = "DELETE FROM tarik WHERE id_tarik = '$id'";
 $queryact = mysqli_query($conn, $query);
 echo "<meta http-equiv='refresh'
              content='0; url=http://localhost/Project_PKM_Banksampah/page/admin.php?page=data-tarik'>";
?>