<?php require("header.html"); 
    include "db.php";
    $res_book = $_GET['book'];

    $result = mysqli_query($connect, "SELECT * FROM `books` WHERE `id`=".$res_book);

    ?>
   
        <?php while($book = mysqli_fetch_assoc($result)) { 
            $img_res = mysqli_query($connect, "SELECT * FROM `images` WHERE `id`=".$book['img_id']);
            $img = mysqli_fetch_assoc($img_res);
            ?>
            
                <ddeiv class="full_book">
                    <img src="img/<?php
                        echo $img['title']; ?>.jpg" alt="">

                    <div class="text_book">
                        <p class="card_desc"><?php echo $book['title']; ?></p>
                        <h4 class="author"><?php echo $book['author']; ?></h3>
                        <h3 class="price"><?php echo $book['price'] . ' ₽'; ?></h3>
                        <p class="book_desc"><?php echo $book['description']; ?></p>
                    </div>

                </div>
        

            <?php
            };
            ?>
     

<?php require("footer.html"); ?>
