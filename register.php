<?php require("header.html");
require("db.php");?>


            <div class="form-block form-auth">
                <?php
                    if (!empty($_POST)){
                        $result = mysqli_query($connect, "SELECT * FROM users WHERE login=\"".$_POST['login']."\"");
                        //echo mysqli_num_rows($result);
                        if(mysqli_num_rows($result) == 0){
                            mysqli_query($connect, "INSERT INTO users (login, password) VALUES (
                                \"".$_POST["login"]."\",
                                \"".md5($_POST["password"])."\"
                                )"
                            );
                        }
                        //$id = mysqli_insert_id($connect);
                        $current_user = $_POST["login"];;

                        header('Location: index_auth.php?user='.$current_user.'');
                    }
                ?>
                <form action="?index_auth.php" class="form" method="post" enctype="multipart/form-data">
                        
                    <h1>Регистрация</h1>

                    <label  for="login">Логин</label>
                    <input required id="login" type="text" name="login">

                    <label for="password">Пароль</label>
                    <input required type="password" name="password">

                    

                    <div class="but">
                        <input type="submit" name="auth" id="button-submit">
                    </div>
                    
                </form>

                
            </div>

<?php require("footer.html"); ?>
