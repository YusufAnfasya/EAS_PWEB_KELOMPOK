<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapor Anak</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Lato:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="sidebar">

        <div class="role">
            <h1>
                Wali Murid
            </h1>

        </div>

        <div class="menu">

            <a href="..//index.php" id="dBoard">Dashboard</a>
            <a href="../bayar/bayar.php" id="bayar">Pembayaran</a>
            <a href="../riwayat/riwayat.php" id="riwayat">Riwayat </a>
            <a href="" id="rapor">Rapor Anak</a>
            <a href="../login.php" id="logOut">Log Out</a>

        </div>


    </div>
    <div class="main">
        <h1 
        style="color: white; background: #065e60">
        Hasil Pembelajaran
        </h1>

        <div class="fitur">
            <h2 style="padding-left: 3%;">

                <?php
            $sql = "SELECT Nama FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<th> Nama Siswa : </th>";
                echo "<th>".$siswa['Nama']."</th>";
            }
            ?>
            </h2>

            <h2 style="padding-left: 3%;padding-bottom:1%">

                <?php
            $sql = "SELECT nis FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<td> NIS      : </td>";
                echo "<td>".$siswa['nis']."</td>";
            }
            ?>
            </h2>

            <h2 style="padding-left: 3%;">Daftar Nilai

            </h2>

            <h3 style="padding-left: 5%;">

                <?php
            $sql = "SELECT * FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<td> Bahasa Inggris   : </td>";
                echo "<td>".$siswa['B_ING']."</td>";
            }
            ?>
            </h3>
            <h3 style="padding-left: 5%;">

                <?php
            $sql = "SELECT * FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<td> MATEMATIKA       : </td>";
                echo "<td>".$siswa['MTK']."</td>";
            }
            ?>
            </h3>
            <h3 style="padding-left: 5%;">

                <?php
            $sql = "SELECT * FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<td> BAHASA INDONESIA :   </td>";
                echo "<td>".$siswa['B_INDO']."</td>";
            }
            ?>
            </h3>
            <h3 style="padding-left: 5%;">

                <?php
            $sql = "SELECT * FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<td> BIOLOGI :   </td>";
                echo "<td>".$siswa['BIO']."</td>";
            }
            ?>
            </h3>
            <h3 style="padding-left: 5%;">

                <?php
            $sql = "SELECT * FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<td> FISIKA :   </td>";
                echo "<td>".$siswa['FIS']."</td>";
            }
            ?>
            </h3>
            <h3 style="padding-left: 5%;">

                <?php
            $sql = "SELECT * FROM nilai_siswa WHERE nis = 10001 ";
            $query = mysqli_query($db, $sql);
            
            while($siswa = mysqli_fetch_array($query)){
                
                echo "<td> KIMIA :   </td>";
                echo "<td>".$siswa['KIM']."</td>";
            }
            ?>
            </h3>

            <h2 style="padding-left: 3%; padding-top: 3%;">NILAI SIKAP : A

            </h2>
        </div>

    </div>

</body>

</html>