<?php
session_start();
if (!isset($_SESSION['username']))
{
    include './logincontroller.php';
    die();
}

?>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SADTECH</title>
        <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="resources/css/style.css" type="text/css">
        
        <script src="resources/js/bootstrap.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
        <header>
            <img src="resources/images/logo.png" alt="logo">
            <h2>Welcome <?php
            if (isset($_SESSION['username']))
            {
            echo $_SESSION['username']." <a href='?page=logout'> Logout </a>";
            }

?></h2>
        </header>
        <div class="clear"></div>
        <div class="contents">
            <aside>
                <a class="btn-danger active" href="index.php">home page</a>
                <a class="btn-danger" href="?page=mainsettings">main settings</a>
                <a class="btn-danger" href="?page=sections">sections</a>
                <a class="btn-danger" href="?page=pages">pages</a>
                <a class="btn-danger" href="?page=comments">comments</a>
                <a class="btn-danger" href="?page=library">library</a>
                
            </aside>
            <section id="page">
                <?php
                if(@$_GET[('page')]){
                    $url ="controllers/C_".$_GET['page'].".php";
                    if (is_file($url)){
                        include ($url);
                    }else{
                        echo 'requested file not found';
                    }
                }else{
                    include './main.php';
                }
                
                ?>
            </section>
        </div>
        
        <div class="clear"></div>
        <footer>
            <p> copy write to sadtech </p>
        </footer>
        </div>
    </body>
</html>
