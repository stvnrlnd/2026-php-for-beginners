<?php
    $books = [
        "Dark Matter",
        "The Great Gatsby",
        "1984",
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Document</title>
    </head>
    <body>
        <h1>Recommended Books</h1>

        <ul>
            <?php foreach ($books as $book) : ?>
                <li><?= $book; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
