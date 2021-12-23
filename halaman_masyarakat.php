<?php
    if(isset($_GET['url']))
    {
        $url=$_GET['url'];
        switch($url)
        {
            case 'tulis_pengaduan';
            include 'tulis_pengaduan.php';
            break;

            case 'lihat_pengaduan';
            include 'lihat_pengaduan.php';
            break;

            case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;

            case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;
        }
    }
    else
    {
        ?>
        Selamat Datang di Sistem Pengaduan Masyarakat Desa Semeloh yang dibuat untuk melaporkan 
        pelanggaran atau peyimpanagan kejadian-kejadian yang ada di lingkungan Desa Semeloh<br><br>
        Anda Login sebagai : <h2><b> <?php echo $_SESSION['nama'];
    }
?>