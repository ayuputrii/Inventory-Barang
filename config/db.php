<?php
  $db = new mysqli('localhost:3306', 'root', '', 'uas_ayu');
  
  if(!$db){
    echo "Gagal koneksi ke database";
  }else{
    echo "";
  }
?>