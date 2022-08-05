<?php
  $db = new mysqli('localhost:3306', 'root', '', 'uas_ayu');
  
  if(!$db){
    echo "Gagal koneksi ke database";
  }else{
    echo "";
  }

  // $servername = 'localhost:3306';
  // $username = 'root';
  // $password = '';

  // try {
  //   $conn = new PDO("mysql:host=$servername;dbname=uas_ayu", $username, $password);
  //   // set the PDO error mode to exception
  //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   echo "";
  // } catch(PDOException $e) {
  //   echo "Connection failed: " . $e->getMessage();
  // }
?>