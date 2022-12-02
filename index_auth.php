<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>books</title>
</head>
<body>
    <section class="section">
        <div class="container">
            <header class="header">
                <a class="header__logo" href="index.php">
                    <img id="logo" src="img/book_icon.png" alt="logo">
                </a>

                <nav class="nav">
            
                <a class="nav__link" href="index.php">Главная</a>
                    <a class="nav__link" href="shop.php">Магазин</a>
                    <a class="nav__link" href="feedback.php">Обратная связь</a>
                    <a class="login-button" href="logout.php">Выйти</a>
     
                </nav>
            </header>

        
        <h1>Авторизованный пользователь</h1>
        <h2>Здравствуйте, <?php echo $_GET['user']; ?></h2>


        <?php
            include "db.php";
            $result = mysqli_query($mysql, "SELECT * FROM `books`");
            echo '<p>'.$result.'</p>';
        ?>

    <div class="box">
        <h4>djsjkljklkl</h4>
        <?php 
            while($book = mysqli_fetch_assoc($result)){
            ?>
                <div class="filters__img">
                    <p><?php echo $book['title']; ?></p>
                </div>

                <?php
        }
        ;
        ?>
    </div> 



<?php require("footer.html") ?>

