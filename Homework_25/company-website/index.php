<?php

    $navItems = [
        'index.php?id=about' => 'About',
        'index.php?id=index' => 'Home',
        'index.php?id=contact' => 'Contact',
        'index.php?id=login' => 'Login'
    ];

    if (isset($_POST['login'])) {
        if (!empty($_POST['username'])) {
            $username = $_POST['username'];
            setcookie('Username', $username);
            header("Location: http://app.test/index.php?id=about");
        }
    };




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local libraries -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title>BootsApp | <?php 
        if (isset($_GET['id'])) {
            switch ($id){  
                case 'about':
                    echo 'About';
                        break;
            
                case 'contact':
                    echo 'Contact';
                        break;
                
                case 'login':
                    echo 'Login';
                        break;
                            
                default:
                echo 'Home';
                    break;
    
            }
        }else {
            echo 'Home';
        }

    ?></title>
    <style>
    </style>
</head>

<body>

    <?php
        include("inc/navigation.inc.php");
    ?>

    <!-- Content Start -->
    <?php
        if (isset($_GET['id'])) {
            switch ($_GET['id']){
            
                case 'about':
                    include("pages/about.page.php");
                        break;
            
                case 'contact':
                    include("pages/contact.page.php");
                        break;
                
                case 'login':
                    include("pages/login.page.php");
                        break;
                            
                default:
                include("pages/index.page.php");
                    break;
    
            }
        }else {
            include("pages/index.page.php");
        }


    ?>

    <!-- Content End -->

    <?php


        if (isset($_GET['id'])) {
            switch ($_GET['id']){
            case 'index':
                include("inc/footer.inc.php");
                break;
            
            case 'about':
                include("inc/footer.inc.php");
                    break;

            case 'contact':
                    break;
            
            case 'login':
                    break;
                        
            default:
            include("inc/footer.inc.php");
                break;

            }   
        }else {
            include("inc/footer.inc.php");
        }
        
    ?>

</body>

</html>