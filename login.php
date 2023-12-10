<?php
require 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah'])) {
    $nis = $_POST['username'];
    $nama = $_POST['pasword'];
   

    $sql = "INSERT INTO jadwalpiket (username, pasword, ) VALUES (:username, :pasword, )";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam('username', $username);
    $stmt->bindParam(':pasword', $pasword);
  

    $stmt->execute();
}
?>
   
        <center>
<form method="post">
            <h1>Masukan Email Anda</h1>
    <tr><td><label for="nis">Username:</label></td>
    <input type="text" id="nis" name="nis">
    <br>
    <label for="nama">Password:</label>
    <input type="password" id="nama" name="nama">
  
    <br>
    <input type="submit" value="Kirim" name="Kirim">
     
</form>
<p>Belum punya akun? <a href="register.php">Register</a></p>
<br>
<p><a href="tampilan.php">kembali</a></p>
        </center>
        </center>
