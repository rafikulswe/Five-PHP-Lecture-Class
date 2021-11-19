<?php session_start();?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Lectures Four</title>
  </head>
  <body>
    <div class="container">
        
        <h1>User Login </h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $dbConnection = mysqli_connect('localhost', 'root', '', 'php_crud_db') or die('Connection Failed');
                $sql = "SELECT email FROM users WHERE email = {$email} AND password = {$password}";

                $result = mysqli_query($dbConnection, "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'") or die('Can not fetch data');
                // var_dump($result);
                if(mysqli_num_rows($result) == 1) {
                    
                    $_SESSION['email'] = $email;
                    
                    header("location: welcome.php");
                } else {
                    echo "Your Login Name or Password is invalid";
                    // header("location: index.php");
                }
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>