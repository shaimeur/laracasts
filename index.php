<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php $bookName = "The Clean Coder" ;
        $read = false ;

?>

<?php if ($read) { ?>
 <h1> I'm reading "<?php echo $bookName ;  ?>"</h1>

<?php  } else {?>

<h1> I did not read "<?php echo  $bookName ;?>" </h1>

<?php } ?>


</body>
</html>