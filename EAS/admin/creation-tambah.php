<!DOCTYPE html>
<html>

<head>
    <title>Payment Creation Tambah</title>
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
            <form action="creation-proses-tambah.php" method="POST" enctype = "multipart/form-data">
                
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="ptitle">Payment Title: </label>
                        <input required class="a" type="text" name="ptitle"/>
                    </p>
                </div>
                
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="pdate">Date: </label>
                        <input required class="a" type="date" name="pdate"/>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="pdesc">Payment Description: </label>
                        <input required class="a" type="text" name="pdesc"/>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="student">Student: </label>
                        <input required class="a" type="text" name="student"/>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="amount">Amount: </label>
                        <input required class="a" type="text" name="amount"/>
                    </p>
                </div>

                <!-- <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="pstatus">Status: </label>
                        <input required class="a" type="text" name="pstatus"/>
                    </p>
                </div> -->

                <div class="form-group mt-3 mx-2 my-4">
                    <p>
                        <label for="pstatus">Status: </label>
                        <br>
                        <label><input type="radio" name="pstatus" value="lunas"> Lunas</label>
                        <label><input type="radio" name="pstatus" value="utang"> Belum Lunas</label>
                    </p>
                </div>

                <!-- <div class="form-group mt-3 mx-2 my-4">
                    <input type="submit" value="Lunas" name="lunas" />
                    <input type="submit" value="Utang" name="utang" />
                </div> -->

                <div class="form-group mt-3 mx-2 my-4">
                    <p>
                        <label for="pbukti">Bukti Pembayaran: </label>
                        <input type="file" name="pbukti"/>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <input type="submit" value="Tambah" name="tambah" />
                </div>

            </form>
        </div>
    </div>
</body>

</html>