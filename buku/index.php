<?php
    include'../aset/header.php';
    
    include'../koneksi.php';

    $sql = "SELECT * FROM buku ORDER BY judul";

    $res = mysqli_query($koneksi,$sql);

    $buku = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $buku[] = $data;
    }
 ?>
 <div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
 </div>
 <div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-book"> Data Buku</i></h2>
  </div>
  <div class="card-body">
    <table class="table table-striped table-dark">
  <thead>
    <tr></tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   <?php
    $no = 1;
    foreach ($buku as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['judul'] ?></td>                                 
        <td><?= $p['pengarang'] ?></td> 
        <td>     
            <a href="detail.php?id_buku=<?= $p['id_buku'];?>" class="badge badge-success">Detail</a>
            <a href="edit.php?id_buku=<?= $p['id_buku'];?>" class="badge badge-warning">Edit</a>
            <a href="hapus_buku.php?id_buku=<?= $p['id_buku'];?>" class="badge badge-danger">Hapus</a>        
        </td>
    </tr>                                       
<?php 
    $no++;
}
?>
  </tbody>
</table>
  </div>
</div>
<a href="tambah2.php" class="btn btn-primary btn-sm">Tambah Data Buku</a>
 <?php 
    include '../aset/footer.php';
  ?>