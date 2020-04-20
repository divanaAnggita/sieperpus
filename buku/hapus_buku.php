<?php 
    include '../koneksi.php';
    
    $id_buku = $_GET["id_buku"];
    $query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id_buku");
    
    var_dump($query);

    if($query>0){
        echo "
        <script>
        alert('Data berhasil dihapus, Yeay!');
        document.location.href = 'index.php';
        </script>
        "
        ;
    }
?>