<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * from users where username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
    }
    else{
        $showError = "Invalid Credentials";
    }
 }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id"
        content="98473991632-p9gli76auevtmvenrp0rmq34hi08genj.apps.googleusercontent.com.apps.googleusercontent.com.apps.googleusercontent.com">
    <title>Log-in</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="login.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="logo">
        <img src="img/ORDY.png" alt="logo" width="80px" height="80px">
    </div>
    <div class="card">
    <form action="/E-Commerce/login.php" method="post">
            <h2>Sign-in</h2>
            <?php  if($showError == true){
                  echo "<p class='sbmsg'>Invalid Credentials !!!</p>";}
            ?>
            <div class="user-info">
                <input id="name" type="text" class="user-padding" name="username" placeholder="Username" required>
                <input type="password" class="user-padding" name="password" placeholder="Password" required>
                <input type="submit" class="btn-1" value="Login">
            </div>
            <div class="mid-part">
                <p>or Login with</p>
                <div class="social-media">
                    <a href="#" class="fb-btn">
                        <i class="fa-brands fa-facebook"></i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Login with Facebook
                    </a>
                    <a href="#" class="google-btn">
                        <div class="g-img">
                            <img src="img/Google__G__Logo.svg.png" alt="google logo" width="18px">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Login with Google
                        </div>
                    </a>
                </div>
            </div>
            <div class="bottom-part">
                <div class="sign-in"><span>Don't have an account ? </span><a href="signup.php" class="btn">Sign up</a>
                </div>
                <div class="forgot-pwd">
                    <a href="#" class="btn">Forgot password?</a>
                </div>
            </div>
        </form>
    </div>
    <script src="index.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>