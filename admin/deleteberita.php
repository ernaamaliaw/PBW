<?php
include "function.php";
$id = $_GET['id_berita'];
if(hapusBerita($id)>0){
    header("location:berita.php");
}
?>