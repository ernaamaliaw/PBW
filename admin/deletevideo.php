<?php
include "function.php";
$id = $_GET['id_video'];
if(hapusVideo($id)>0){
    header("location:video.php");
}
?>