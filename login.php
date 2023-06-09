<?php
include 'koneksi.php';

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error_message = "Harap isi username dan password.";
    } else {
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            $error_message = "Login failed. Invalid username or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Rental PSCOY - Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('Images/wp.jpg'); 
      background-size: cover;
      background-position: center;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .login-form {
      padding: 20px;
      background-color: transparent;
      width: 400px;
    }
    
    h2 {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }
    
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .form-group .btn {
      width: 100%;
      padding: 10px;
      background-color: steelblue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    .form-group .btn:hover {
      background-color: steelblue;
    }
    
    .rental-info {
      margin-top: 30px;
      text-align: center;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>LOGIN COY</h2>
      <?php if (isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
      <?php endif; ?>
      <form method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Login" class="btn">
        </div>
        <div class="form-group">
        <p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
      </div>
      </form>
    </div>
  </div>
</body>
</html>