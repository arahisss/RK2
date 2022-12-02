<?php require("header.html");
require("db.php");?>


            <div class="form-block form-auth">
                <form action="?index_auth.php" class="form" method="post" enctype="multipart/form-data">
                        
                    <h1>Аутентификация</h1>

                    <label  for="login">Логин</label>
                    <input required id="login" type="text" name="login">

                    <label for="password">Пароль</label>
                    <input required type="password" name="password">

                    

                    <div class="but">
                        <input type="submit" name="auth" id="button-submit">
                    </div>
                    
                    <?php
                    $result = mysqli_query($connect, "SELECT * FROM users WHERE
                    login='".$_POST["login"]."' AND
                    password='".md5($_POST["password"])."'
                    "); // добавить шифрование
                    
                    
                    if(!$result || mysqli_num_rows($result) == 0){
                        // echo "Неверный логин или пароль";
                        exit;
                    }
                    
                    session_start();
                    $_SESSION["user"] = mysqli_fetch_assoc($result);
                    
                    header("Location: index_auth.php")
                    ?>
                </form>

                
            </div>

<?php require("footer.html"); ?>
