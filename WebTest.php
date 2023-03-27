<!DOCTYPE html>
<html>

<head>
    <title>Products Demo Page</title>

    <!-- (A) CSS & JS -->
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>
    <!-- (B) BOOKS LIST -->
    <div id="our-books"><?php 
      require "products.php";
      foreach ($products as $p) { ?>
        <div class="bookWrap" data-id="<?=$p["id_product"]?>">
            <img class="bookImg" src="book.png">
            <div class="bookTitle"><?=$p["name"]?></div>
            <div class="bookDesc"><?=$p["description"]?></div>
        </div>
        <?php }
    ?>
    </div>
</body>

</html>