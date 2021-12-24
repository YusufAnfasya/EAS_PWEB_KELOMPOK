<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembayaran</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Lato:wght@700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            <a href="" id="riwayat">Riwayat </a>
            <a href="../rapor/rapor.php" id="rapor">Rapor Anak</a>
            <a href="../login.php" id="logOut">Log Out</a>

        </div>


    </div>
    <div class="main">
        <h1 
        style="color: white; background: #065e60">
        Riwayat Pembayaran
        </h1>
        
        <div class="p-5">
      
        <br>
        <table class="table table-bordered">        
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID SPP</th>
                    <th scope="col" class="text-center">Jenis Pembayaran</th>
                    <th scope="col" class="text-center">Tanggal</th>
                    <th scope="col" class="text-center">Deskripsi</th>
                    <th scope="col" class="text-center">Siswa</th>
                    <th scope="col" class="text-center">Jumlah Pembayaran</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Bukti Pembayaran</th>
                    
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM spp where student = 'MIGEL AULIA' and not pstatus = 'BELUM DIBAYAR'";
                $query = mysqli_query($db, $sql);

                while ($payment = mysqli_fetch_array($query)) 
                {
                    echo "<tr>";
                    echo "<td>" . $payment['id'] . "</td>";
                    echo "<td>" . $payment['ptitle'] . "</td>";
                    echo "<td>" . $payment['pdate'] . "</td>";
                    echo "<td>" . $payment['pdesc'] . "</td>";
                    echo "<td>" . $payment['student'] . "</td>";
                    echo "<td>" . $payment['amount'] . "</td>";
                    echo "<td style='width: 20%'>" . $payment['pstatus'] . "</td>";
                    echo "<td><img src='../images/".$payment['pbukti']."' width='100' height='100'></td>"; 
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h5 style="text-align: right;">Total: <?php echo mysqli_num_rows($query) ?></h5>
    
    </div>
        
    </div>

</body>

</html>