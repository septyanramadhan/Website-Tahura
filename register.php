<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="register_process.php" method="post">
            <div class="input-group">
                <label><tr><td>Username:</td></label>
                <td></td><td><input type="text" name="username" required></td>
            </div>
            <div class="input-group">
              <tr><td>Email</td><td>:</td><td><input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
           
             <button><a href="login.php"></a>Register</button>
             <p>Kembali ke baranda<a href="tampilan.php">Kembali</a></p>

</body>
</html>
