<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) 
{
    header('Location: creation-list.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM list_payments WHERE id=$id";
$query = mysqli_query($db, $sql);
$payment = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if (mysqli_num_rows($query) < 1) 
{
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Payment Creation Edit</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Candal&family=Spinnaker&display=swap');
    </style>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    
    <style>
        .a 
        {
            width: 100%;
        }

        body 
        {
            font-family: 'Candal', sans-serif;
            font-family: 'Spinnaker', sans-serif;
        }
    </style>
</head>

<body>
    <div class="d-flex min-vh-100 flex-column aligns-items-center justify-content-center">
        <div class="container p-0 card shadow border-0 rounded" style="max-width: 20rem;">
            <form action="creation-proses-edit.php" method="POST" class="form-group" enctype = "multipart/form-data">
                
                <div class="form-group mt-3 mx-2">
                    <input class="a" type="hidden" name="id" value="<?php echo $payment['id'] ?>" />
                    <label for="ptitle">Payment Title: </label><br>
                    <input class="a" type="text" name="ptitle" value="<?php echo $payment['ptitle'] ?>" />
                </div>
                
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="pdate">Date: </label><br>
                        <textarea name="pdate"><?php echo $payment['pdate'] ?></textarea>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="pdesc">Payment Description: </label><br>
                        <textarea name="pdesc"><?php echo $payment['pdesc'] ?></textarea>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="student">Student: </label><br>
                        <textarea name="student"><?php echo $payment['student'] ?></textarea>
                    </p>
                </div>
                
                <div class="form-group mt-3 mx-2 my-4">
                    <p>
                        <label for="amount">Amount: </label><br>
                        <input class="a" type="text" name="amount" value="<?php echo $payment['amount'] ?>" />
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <p>
                        <label for="pstatus">Status: </label><br>
                        <input class="a" type="text" name="pstatus" value="<?php echo $payment['pstatus'] ?>" />
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <p>
                        <label for="pbukti">Foto: </label><br>
                        <input class="a" type="file" name="pbukti"/>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <input type="submit" value="Simpan" name="simpan" />
                </div>

            </form>
        </div>
    </div>
</body>

</html>