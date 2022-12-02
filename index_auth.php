<?php require("header.html") ?>

    <h1>Авторизованный</h1>
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

