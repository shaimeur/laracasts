<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>



<h1>List of books </h1>




<ul>




    <?php foreach ($myFilter as $item)  :?>

    <li>
        <?= $item["bookName"] ;?> , <?= $item["price"] ;?>
    </li>

    <?php endforeach; ?>

</ul>



</body>
</html>