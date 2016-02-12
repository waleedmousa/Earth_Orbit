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
        <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="resources/css/style.css" type="text/css">
        
        <script src="resources/js/bootstrap.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="contents logincont">
            <div class="register">
                <form action="logincontroller.php" method="post">
                    <h1>Registeration</h1>
                    <input required="required" name="name" class="input-lg" type="text" placeholder="Name">
                    <input required="required" name="username" class="input-lg" type="text" placeholder="username">
                    <input required="required" name="password" class="input-lg" type="password">
                    <input required="required" name="email" class="input-lg" type="email" placeholder="Email">
                    
                    <input class="btn-primary btn-lg"type="submit" name="submit" value="register">
                    
                    
                </form>
            </div>
            <div class="login">
                <h1>Login</h1>
                <form action="logincontroller.php" method="POST">
                <input required="required" name="username" class="input-lg" type="text" placeholder="username">
                <input required="required" name="password" class="input-lg" type="password">
                <input class="btn-primary btn-lg" type="submit" name="submit" value="Login">
                
                    
                </form>
                
            </div>
            </div>
            
        </div>
    </body>
</html>
