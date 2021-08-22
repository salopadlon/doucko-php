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
            <h2>Register</h2>
            <form action="valiation.php" method="post">
                <div>
                    <label>Username</label>
                    <input type="text" name="user" required>
                </div>
                
                <div>
                    <label>Email</label>
                    <input type="text" name="user" required>
                </div>
                
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
        <?php
        include("config.php");
        session_start();
        
        ?>
    </body>
</html>
