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
            <div class="form-block">
                <form action="#" class="form" method="post" enctype="multipart/form-data">
                    <h1>Обратная связь</h1>

                    <label for="lastname">Фамилия</label>
                    <input type="text" name="firstname">

                    <label>Имя</label>
                    <input type="text" name="lastname">

                    <label>Отчество</label>
                    <input type="text" name="lastname">

                    <label>Email</label>
                    <input type="email" name="email">

                    <p>
                        <b>Откуда о нас узнали</b><br>
                        <input checked type="radio" name="source" value="complaint">Реклама<br>
                        <input type="radio" name="source" value="offer">Наш паблик<br>
                        <input type="radio" name="source" value="offer">От друзей<br>
                    </p>

                    <p>
                        <b>Тип обращения</b><br>
                        <select name="" id="">
                            <option disabled>Тип обращения</option>
                            <option value="1">Жалоба</option>
                            <option selected value="2">Предложение</option>
                        </select>
                    </p>


                    <b>Обращение</b>
                    <textarea name="text" cols="30" rows="10"></textarea>

                    <p>
                        <input type="file" name="f">
                    </p>
                    
                    <div>
                        <input type="checkbox">
                        <label>Даю согласие на обработку персональных данных</label>
                    </div>

                    <div class="but">
                        <input type="submit" name="" id="button-submit">
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>