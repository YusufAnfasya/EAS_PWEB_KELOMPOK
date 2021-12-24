<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;800&display=swap" rel="stylesheet">
    <title>Login ARTCA</title>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_login.css">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
    <div class="judul">
        <p>Wali Murid
            
        </p>
    </div>
    <div class="container">
        <div class="headline">
            <h1>Masuk</h1>
            <p><a href="register.html">Daftar</a></p>
        </div>

        <form class="form-temp" name="formInfo" action="" method="post" onsubmit="return validateForm()">
            <div class="isi-form">
                <label>Phone Number or Email</label> <br/>
                <input type="text" name="email" id="fileToLoad" class="form-control"> <br/>
            </div>
            <div class="isi-form">
                <label>Password </label> <br/>
                <input type="password" name="password"  class="form-control"><br/>
            </div>
            <div class="pass">
                <p><a href="pass_recovery.html">Lupa kata sandi?</a></p>
            </div>
            <div class="daftar-but">
                <button type="submit" class="btn btn-primary" data-rel="back"><a href="index.php">Login</a></button>
            </div>
            <div class="atau">
                <p><span> atau masuk dengan </span></p>
            </div>
            <div class="g-signin2" data-onsuccess="onSignIn" ></div>
        </form>
    </div>

    
</body>
</html>