<?php require("header.html") ?>
    <?php
        include "db.php";
        $result = mysqli_query($connect, "SELECT * FROM `books`");
    ?>
    <div class="card_block">
        <?php while($book = mysqli_fetch_assoc($result)) { 
            $img_res = mysqli_query($connect, "SELECT * FROM `images` WHERE `id`=".$book['img_id']);
            $img = mysqli_fetch_assoc($img_res);
            ?>
            
                <a href="<?php echo 'card.php?book='.$book['id']; ?>" class="card">
                    <img src="img/<?php
                        echo $img['title']; ?>.jpg" alt="">
                    <p class="card_desc"><?php echo $book['title']; ?></p>
                    <h4 class="author"><?php echo $book['author']; ?></h3>
                    <h3 class="price"><?php echo $book['price'] . ' ₽'; ?></h3>
                </a>
        

            <?php
            };
            ?>
        </div>


        

<?php require("footer.html") ?>
