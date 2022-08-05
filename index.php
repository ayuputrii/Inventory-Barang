<?php 
  include 'layout/header.php';

  $data = select("SELECT * FROM tb_barang ORDER BY id DESC");
?>
  <div class="container mt-4">
    <h2>Inventory Barang</h2>
    <hr>
    <a href="form-tambah.php" class="btn btn-info text-white mb-2">Tambah Barang</a>
    <table class="table table-striped mt-2 table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Jenis Barang</th>
          <th>Harga Barang</th>
          <th>Stock Barang</th>
          <th>Tanggal</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $barang) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $barang['kode_barang']; ?></td>
          <td><?= $barang['nama_barang']; ?></td>
          <td><?= $barang['jenis_barang']; ?></td>
          <td>Rp. <?= number_format($barang['harga_barang'],0, ',','.'); ?></td>
          <td><?= $barang['stock_barang']; ?></td>
          <td><?= $barang['created_at']; ?></td>
          <td width="15%" class="text-center">
            <a href="form-ubah.php?id=<?= $barang['id']; ?>" class="btn btn-success"  onClick="return confirm('Apakah anda yakin data barang ini diubah?');">Ubah</a>
            <a href="delete.php?id=<?= $barang['id']; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin data barang ini dihapus?');">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php include 'layout/footer.php'?>