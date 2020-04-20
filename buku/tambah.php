<?php 
    include '../aset/header.php';
?>
    <div class="container">
        <div class="roe-mt4">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h2><i class="fas fa-folder-plus"> Tambah Data Buku</i></h2></div>
                    <div class="card-body">
                        <form method="post" action="proses_tambah2.php">
                        </div>
                            <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul buku">
                        </div>
                            <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan penerbit">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan pengarang">
                        </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan">
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="text" class="form-control" name="cover" id="cover" placeholder="Masukkan cover">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan stok buku">
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>


                    </div>
                </div>
            </div>  
        </div>
    </div>
<?php 
    include '../aset/footer.php';