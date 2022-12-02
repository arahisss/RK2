<?php require("header.html");
use function UI\quit; 
 require("db.php");?>


            <div class="form-block form-auth">
                <form action="#" class="form" method="post" enctype="multipart/form-data">
                    <h1>Аутентификация</h1>

                    <?php
                        $result = mysqli_query($connect, "SELECT * FROM users WHERE
                            login='".$_POST["login"]."' AND
                            password='".md5($_POST["password"])."'
                        ");

                        session_start();
                        $session_user = (isset($_SESSION["user"])) ? $_SESSION["user"] : false;


                        ?>

                    <label  for="login">Логин</label>
                    <input id="login" type="text" name="login">

                    <label for="password">Пароль</label>
                    <input type="password" name="password">

                    <div class="but">

                        <a href="<?php
                            if(!$result || mysqli_num_rows($result) == 0){
                                echo '#';
                                exit;
                            }
                            echo 'index_auth.php';
                        ?>">Отправить</a>
                    </div>
                    
                    
                </form>
            </div>

<?php require("footer.html"); ?>
