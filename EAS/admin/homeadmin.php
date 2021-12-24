<?php include("config.php"); ?>

<!DOCTYPE html>

<html>

<head>
    <title>Home Admin</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Candal&family=Spinnaker&display=swap');
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <style>
        a{
            text-align: center;
            margin-left: 25%;
            padding: 1%;
            font-size: x-large;

        }
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
            margin-left: 1135px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <div class="row">
                    <div class="col">
                        <a class="dropdown-item text-end " href="">
                            <button type="button" class="btn btn-light">Logout</button>
                        </a>
                    </div>
                </div>
            </header>
            
            <div class="p-1 mb-4 bg-light rounded-3">
                <div class="container-fluid py-1">
                    <p>Selamat datang di halaman akses <b>admin</b></p>
                </div>
            </div>

            <div class="row align-items-md-stretch mt-5">

                <div class="col-md-3 text-center">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>
                        <?php
                            $sql = "SELECT * FROM calon_siswa";
                            $query = mysqli_query($db, $sql);
                           
                        ?>
                        <?php echo mysqli_num_rows(mysqli_query($db, $sql)) ?>
                        </h2>
                        <p>Jumlah siswa terdaftar </p></p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>
                        <?php
                            $sql = "SELECT * FROM calon_siswa";
                            $query = mysqli_query($db, $sql);
                           
                        ?>
                        <?php echo mysqli_num_rows(mysqli_query($db, $sql)) ?>
                        </h2>
                        <p>Jumlah spp terbayar </p></p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>
                        <?php
                            $sql = "SELECT * FROM calon_siswa";
                            $query = mysqli_query($db, $sql);
                           
                        ?>
                        <?php echo mysqli_num_rows(mysqli_query($db, $sql)) ?>
                        </h2>
                        <p>Jumlah tugas terkumpul </p></p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>
                        <?php
                            $sql = "SELECT * FROM calon_siswa";
                            $query = mysqli_query($db, $sql);
                           
                        ?>
                        <?php echo mysqli_num_rows(mysqli_query($db, $sql)) ?>
                        </h2>
                        <p>Jumlah spp terbayar </p></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="fitur">
            <a href="creation-list.php">
                Payment Management
            </a>

            <a href="index.php">
                Student Management
            </a>


        </div>
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Lato:wght@700&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <div class="main">
    <h1 
        style="color: white; background: #065e60">
        
        </h1>
        
    </div>
    
</body>
</html>