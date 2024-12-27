<<<<<<< HEAD
<?php 
    $value = "Ini Cookie pertama";
    setcookie("first_cookie", $value);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>implementasi Cookie</h1> 
    <?php if(isset($_COOKIE['first_cookie'])):?>
    <p><?php echo $_COOKIE['first_cookie'];?></p>
    <?php else:?>
        <p>Cookie belum di-set</p>
    <?php endif;?> 

    <!-- menghapus cookie -->
    <?php
        if(isset($_COOKIE['first_Cookie'])){
            setcookie('first_cookie');
        }
        ?>
</body>
=======
<?php 
    $value = "Ini Cookie pertama";
    setcookie("first_cookie", $value);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>implementasi Cookie</h1> 
    <?php if(isset($_COOKIE['first_cookie'])):?>
    <p><?php echo $_COOKIE['first_cookie'];?></p>
    <?php else:?>
        <p>Cookie belum di-set</p>
    <?php endif;?> 

    <!-- menghapus cookie -->
    <?php
        if(isset($_COOKIE['first_Cookie'])){
            setcookie('first_cookie');
        }
        ?>
</body>
>>>>>>> 3bdc20b930dfccccd74736da88fc61fe4cabdf7c
</html>