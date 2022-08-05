<?php
  include 'config/app.php';

  $id = (int)$_GET['id'];
  
  if(delete($id) > 0){
    echo "<script>alert('Data Berhasil Dihapus.'); document.location.href='index.php'; </script>";
  }else{
    echo "<script>alert('Data Gagal Untuk Dihapus.'); document.location.href='index.php'; </script>";
  }
?>