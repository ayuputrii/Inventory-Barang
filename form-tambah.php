<?php 
  include 'layout/header.php';

  if(isset($_POST['tambah'])){
    if(create($_POST) > 0){
      echo "<script>alert('Data Berhasil Disimpan.'); document.location.href='index.php'; </script>";
    }else{
      echo "<script>alert('Data Gagal Untuk Disimpan.'); document.location.href='index.php'; </script>";
    }
  }
?>
  <div class="container mt-4">
    <h2>Inventory Barang | Tambah Barang</h2>
    <hr>

    <form action="" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
        <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Input Kode Barang" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Input Nama Barang" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" placeholder="Input Jenis Barang" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
        <input type="number" class="form-control" id="harga_barang" name="harga_barang" placeholder="Input Harga Barang" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Stock Barang</label>
        <input type="number" class="form-control" id="stock_barang" name="stock_barang" placeholder="Input Stock Barang" required>
      </div>
      <button type="submit" class="btn btn-info text-white mb-4" name="tambah" onClick="return confirm('Apakah data yang anda masukkan sudah sesuai?');">Simpan</button>
    </form>
  </div>
<?php include 'layout/footer.php' ?>