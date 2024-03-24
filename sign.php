<?php
    $showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO `users` (`sno`, `username`, `password`, `dt`) VALUES (NULL, '$username', '$password', CURRENT_TIMESTAMP);";
    $result = mysqli_query($conn, $sql);
    if ($result){
        $showAlert = true;
    }

    if($showAlert){
        echo "Your Successfully login";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <img src="1.png" alt="">
    <section>
        <div class="imgBx">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Sing in</h2>
                <form method="POST" action="#">
                    <div class="inputBx">
                        <span>username</span>
                        <input type="text" name="username" placeholder="Enetr your username">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="text" name="password" placeholder="Enetr your password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name=""> Remember Me</input></label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign in" name="">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account? <a href="#">Sign up</a><p>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>