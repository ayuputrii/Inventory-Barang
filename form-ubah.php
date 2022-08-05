<?php 
  include 'layout/header.php';

  //mengambil data dari id barang
  $id = (int)$_GET['id'];
  $barang = select("SELECT * FROM tb_barang WHERE id = $id")[0];

  if(isset($_POST['ubah_barang'])){
    if(update($_POST) > 0){
      echo "<script>alert('Data Berhasil Diubah.'); document.location.href='index.php'; </script>";
    }else{
      echo "<script>alert('Data Gagal Untuk Diubah.'); document.location.href='index.php'; </script>";
    }
  }
?>
  <div class="container mt-4">
    <h2>Inventory Barang | Ubah Barang</h2>
    <hr>

    <form action="" method="POST">
      <input type="hidden" class="form-control" id="id" name="id" value=<?= $barang['id']; ?> placeholder="Input Id Barang" required readonly>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value=<?= $barang['kode_barang']; ?> placeholder="Input Kode Barang" required readonly>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value=<?= $barang['nama_barang']; ?> placeholder="Input Nama Barang" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value=<?= $barang['jenis_barang']; ?>  placeholder="Input Jenis Barang" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
        <input type="number" class="form-control" id="harga_barang" name="harga_barang" value=<?= $barang['harga_barang']; ?> placeholder="Input Harga Barang" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Stock Barang</label>
        <input type="number" class="form-control" id="stock_barang" name="stock_barang" value=<?= $barang['stock_barang']; ?> placeholder="Input Stock Barang" required>
      </div>
      <button type="submit" class="btn btn-info text-white mb-4" name="ubah_barang" onClick="return confirm('Apakah data yang anda ubah sudah sesuai?');">Ubah</button>
    </form>
  </div>
<?php include 'layout/footer.php' ?>