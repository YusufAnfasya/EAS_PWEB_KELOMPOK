<?php

include("../config.php");


// cek apakah tombol daftar sudah diklik atau belum?

if(isset($_POST['tambah']))
{
    // ambil data dari formulir
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $pbukti = $_FILES['pbukti']['name'];
    $tmp = $_FILES['pbukti']['tmp_name'];
    
    // me-rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$pbukti;
    // menyetel path folder tempat menyimpan fotonya
    $path = "../images/".$fotobaru;
    if(move_uploaded_file($tmp, $path)){
        if(is_file("images/".$data['foto']))
        unlink("images/".$data['foto']);
        // buat query
        $sql = "UPDATE spp SET pstatus='MENUNGGU VERIF', pbukti='$fotobaru' WHERE id=4 ";
        $query = mysqli_query($db, $sql);
        
        // apakah query simpan berhasil?
        if( $query ) 
        {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: ../riwayat/riwayat.php?status=sukses');
        } 
        else 
        {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: bayar.php?status=gagal');
        }   
    }
    
} 
else 
{
    die("Akses dilarang...");
}

?>