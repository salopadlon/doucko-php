<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h2>Login</h2>
            <form action="" method="post">
                <div>
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>
                
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
        <?php
        include("config.php");
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = mysqli_real_escape_string($link,$_POST['username']);
            $password = mysqli_real_escape_string($link,$_POST['password']); 
            
            $query = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($link,$query);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            
            if($count == 1) {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                
                header("location: index.php");
                mysqli_close($link);
            }
            else {
                echo "<br><br> Wrong username or password!";
            }
        }
        
        ?>
    </body>
</html>
