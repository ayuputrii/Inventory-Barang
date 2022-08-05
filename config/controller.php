<?php
  include 'db.php';

  //fungsi untuk menampilkan data barang
  function select($query){
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    if(!$result){
      die(mysqli_error($db));
    }

    while($row = mysqli_fetch_array($result)){
      $rows[] = $row;
    }

    return $rows;
  }

  //fungsi untuk menambahkan data barang
  function create($post){
    global $db;

    $kode_barang = $post['kode_barang'];
    $nama_barang = $post['nama_barang'];
    $jenis_barang = $post['jenis_barang'];
    $harga_barang = $post['harga_barang'];
    $stock_barang = $post['stock_barang'];

    $query = "INSERT INTO tb_barang VALUES(null, '$kode_barang', '$nama_barang', '$jenis_barang', '$harga_barang', '$stock_barang', CURRENT_TIMESTAMP())";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
  }

  //fungsi untuk mengubah data barang
  function update($post){
    global $db;

    $id = $post['id'];
    $kode_barang = $post['kode_barang'];
    $nama_barang = $post['nama_barang'];
    $jenis_barang = $post['jenis_barang'];
    $harga_barang = $post['harga_barang'];
    $stock_barang = $post['stock_barang'];

    $query = "UPDATE tb_barang SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', harga_barang = '$harga_barang', stock_barang = '$stock_barang' WHERE id = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
  }

  //fungsi untuk hapus data barang
  function delete($id){
    global $db;

    mysqli_query($db, "DELETE FROM tb_barang WHERE id= $id");
    return mysqli_affected_rows($db);
  }
?>