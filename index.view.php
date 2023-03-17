<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php getting started</title>
    <style>
        body {

            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h1>
    List of books Details
</h1>
<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <a href="<?= $book['downloadUrl'] ?>">
            <li><?= $book['title'] . " " . $book['author'] . " " . $book['releaseDate'] ?></li>
        </a>
    <?php endforeach; ?>
</ul>
</body>
</html>
