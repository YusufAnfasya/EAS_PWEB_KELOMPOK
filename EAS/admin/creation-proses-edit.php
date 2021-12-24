<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan']))
{
    // ambil data dari formulir
    $id = $_POST['id'];
    $ptitle = $_POST['ptitle'];
    $pdate = $_POST['pdate'];
    $pdesc = $_POST['pdesc'];
    $student = $_POST['student'];
    $amount = $_POST['amount'];
    $pstatus = $_POST['pstatus'];

    // ambil data foto yang dipilih dari form
    $pbukti = $_FILES['pbukti']['name'];
    $tmp = $_FILES['pbukti']['tmp_name'];

    if(empty($fpbukti))
    {
        // buat query update
        $sql = "UPDATE list_payments SET ptitle='$ptitle', pdate='$pdate', pdesc='$pdesc', student='$student', amount='$amount', pstatus='$pstatus' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if( $query ) 
        {
            // kalau berhasil alihkan ke halaman list-siswa.php
            header('Location: creation-list.php');
        } 
        else 
        {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }
    }
    else
    {
        // me-rename nama fotonya dengan menambahkan tanggal dan jam upload
        $fotobaru = date('dmYHis').$pbukti;
        // menyetel path folder tempat menyimpan fotonya
        $path = "images/".$fotobaru;

        if(move_uploaded_file($tmp, $path))
        {
            // select query untuk mengambil data dari id 
            $sql = "SELECT pbukti FROM list_payments WHERE id=$id";
            $query = mysqli_query($db, $sql);
            $data = $query->fetch_assoc();
            
            // jika foto ada
            if(is_file("images/".$data['pbukti'])) 
            unlink("images/".$data['pbukti']);

            // buat query update
            $sql = "UPDATE list_payments SET ptitle='$ptitle', pdate='$pdate', pdesc='$pdesc', student='$student', amount='$amount', pstatus='$pstatus', pbukti='$fotobaru' WHERE id=$id";
            $query = mysqli_query($db, $sql);

            // apakah query update berhasil?
            if( $query ) 
            {
                // kalau berhasil alihkan ke halaman list-siswa.php
                header('Location: creation-list.php');
            } 
            else 
            {
                // kalau gagal tampilkan pesan
                die("Gagal menyimpan perubahan...");
            }
        }
    }
} 
else 
{
    die("Akses dilarang...");
}

?>