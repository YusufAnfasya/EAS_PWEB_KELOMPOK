<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Payment Creation List</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Candal&family=Spinnaker&display=swap');
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <style>
        body 
        {
            font-family: 'Candal', sans-serif;
            font-family: 'Spinnaker', sans-serif;
        }

        table 
        {
            background-color: white;
        }

        #tambahbaru
        {
            margin-left: 1119px;
        }
    </style>
</head>

<body>
    <div class="p-5">
        <nav>
           <a id="tambahbaru" class="btn btn-light" href="creation-tambah.php">Tambah Baru</a>
        </nav>
        <br>
        <table class="table table-bordered">        
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Payment Title</th>
                    <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center">Payment Description</th>
                    <th scope="col" class="text-center">Student</th>
                    <th scope="col" class="text-center">Amount</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Bukti Pembayaran</th>
                    <th scope="col" class="text-center">Tindakan</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM list_payments";
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
                    echo "<td><img src='images/".$payment['pbukti']."' width='100' height='100'></td>"; 
                    echo "<td>";
                    echo "<a href='creation-edit.php?id=" . $payment['id'] . "'>Edit </a>";
                    echo "<a href='creation-hapus.php?id=" . $payment['id'] . "'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h5>Total: <?php echo mysqli_num_rows($query) ?></h5>
    
    </div>
</body>

</html>