<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['tambah']))
{
    // ambil data dari formulir
    $ptitle = $_POST['ptitle'];
    $pdate = $_POST['pdate'];
    $pdesc = $_POST['pdesc'];
    $student = $_POST['student'];
    $amount = $_POST['amount'];
    $pstatus = $_POST['pstatus'];

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $pbukti = $_FILES['pbukti']['name'];
    $tmp = $_FILES['pbukti']['tmp_name'];
    
    // me-rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$pbukti;
    // menyetel path folder tempat menyimpan fotonya
    $path = "images/".$fotobaru;

    if(move_uploaded_file($tmp, $path))
    {
        // buat query
        $sql = "INSERT INTO list_payments (ptitle, pdate, pdesc, student, amount, pstatus, pbukti) VALUE ('$ptitle', '$pdate', '$pdesc', '$student', '$amount', '$pstatus', '$fotobaru')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) 
        {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: creation-list.php?status=sukses');
        } 
        else 
        {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: creation-list.php?status=gagal');
        }   
    }
} 
else
{
    die("Akses dilarang...");
}

?>