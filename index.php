<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@300&display=swap" rel="stylesheet">

    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/jquery.validationEngine-th.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- FAVICON -->
    <link rel="icon" href="favicon.png" type="image/gif">

    
</head>
    
        <body >
                <!-- HEADER -->
            <header>
                    <?php include "header.php"; ?>
            </header>      

            <!-- GET MORE PAGES! -->
            <?php 
            if(@$_GET['some'])
                $file=$_GET['some']."/".$_GET['page'].".php";
            else
                $file=@$_GET['page'].".php";
            if(is_file($file)){
                require_once("$file");
                }
            else{
                require_once("home.php");
                }
            ?>


                <!-- FOOTER -->
            <footer>
                    <?php include "footer.php"; ?>
            </footer>

        </body>

<!-- OTHER SCRIPT -->

</html>