<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 02 -html-php</title>
</head>
<body>
    <!--header-->
    <?php include_once './inc/header.php'?>
    <h1>html va php</h1>
    <?php  echo 'heilo world'; ?>
    <?php
        $language =' ngon ngu lap trinh php';
        var_dump($language);
    ?>
    <?php include_once './inc/content.php';?>
    <!--footer-->
    <?php include_once './inc/footer.php';?>
  
</body>
</html>