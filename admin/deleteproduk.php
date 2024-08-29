<?php
include "function.php";
$id = $_GET['id_pdt'];
if(hapusProduk($id)>0){
    header("location:produk.php");
}
?>