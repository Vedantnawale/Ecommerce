<?php
$showError = false;
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
     include 'dbconnect.php';
     $username = $_POST["username"];
     $email = $_POST["email"];
     $tel = $_POST["tel"];
     $password = $_POST["password"];
     $cpassword = $_POST["cpassword"]; 
    //  $exists = false;
    //  Check whether this users exist or not
     $existSql = "SELECT * FROM `users` WHERE username ='$username'";
     $result = mysqli_query($conn, $existSql);
     $numExistRows = mysqli_num_rows($result);
     if($numExistRows > 0){
            // $exists = true;
            $showError = "Username Already Exists";
     }
     else{
        $exists = false;
     if($password == $cpassword){
     $sql = "INSERT INTO `ecommerce`.`users` (`username`, `email`, `mobile`, `password`, `cpassword`, `date`) VALUES ('$username', '$email', '$tel', '$password', '$cpassword', current_timestamp())";
     $result = mysqli_query($conn, $sql);
     if($result){
         $showAlert = true;
         header("location: login.php");
     }
     }  
     else{
        $showError = "Password do not match";
     }
 }
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="signup.css">
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
        <form action="/E-Commerce/signup.php" method="post">
            <h2>Sign-Up</h2>
            <?php  if($showError == true){
                  echo "<p class='sbmsg'>$showError</p>";}
            ?>
            <div class="user-info">
                <input type="text" class="user-padding" name="username" placeholder="Username" required>
                <input type="email" class="user-padding" name="email" placeholder="Email" required>
                <input type="tel" class="user-padding" maxlength="10" name="tel" placeholder="Mobile Number" required>
                <input type="password" class="user-padding" minlength="8" name="password" placeholder="Password"
                    required>
                <input type="cpassword" class="user-padding" minlength="8" name="cpassword"
                    placeholder="Confirm Password" required>
                <input type="submit" class="btn-1" value="Sign-Up">
            </div>
        </form>
    </div>

</body>

</html>