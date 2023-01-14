<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form" action="insert.php" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" required />
        <input type="text" class="login-input" name="phoneno" placeholder="Phone No" required />
        <input type="text" class="login-input" name="address" placeholder="Address" required />
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
</body>
</html>
