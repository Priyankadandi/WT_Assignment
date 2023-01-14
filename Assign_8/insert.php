<?php
    require('db.php');
    
    if (isset($_REQUEST['username'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);

        $phoneno = stripslashes($_REQUEST['phoneno']);
        $phoneno = mysqli_real_escape_string($con, $phoneno);

        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con, $address);

        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username); 

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $register_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (name, phoneno, address, username, password, email, register_datetime)
                     VALUES ('$name', '$phoneno', '$address', '$username', '" . md5($password) . "', '$email', '$register_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
?>
