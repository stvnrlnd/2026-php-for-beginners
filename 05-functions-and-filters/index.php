<?php
    $books = [
        [
            'name' => 'Dark Matter',
            'author' => 'Blake Crouch',
            'releaseYear' => 2020,
            'purchaseUrl' => 'https://example.com/dark-matter',
        ],
        [
            'name' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'releaseYear' => 1925,
            'purchaseUrl' => 'https://example.com/the-great-gatsby',
        ],
        [
            'name' => '1984',
            'author' => 'George Orwell',
            'releaseYear' => 1949,
            'purchaseUrl' => 'https://example.com/1984',
        ],
    ];

    $filteredBooks = array_filter(
        $books,
        fn ($item) => $item['author'] === 'Blake Crouch'
    );
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
            <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <?= $book['name']; ?> by <?= $book['author']; ?>
                    (<a href="<?= $book['purchaseUrl']; ?>">purchase</a>)
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
