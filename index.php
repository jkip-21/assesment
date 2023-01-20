<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="title">WATER BILL CALCULATOR</h1>
    <form action="index.php" method="post">
        <label for="name">Name *</label>
        <input class="name" type="text" name="name" placeholder="Enter your name"><br>
        <label for="unit">Units *</label>
        <input class="unit" type="number" name="units" placeholder="Enter units used"><br>
        <input class="btn" type="submit" value="SUBMIT">
            </form>
    <?php
    include "classes.php";
    echo "
    <p style=\"color: #283618;margin-left: 20px; font-size: 30px; font-weight: bold;\"> Bill Records</p>";
    $name = $_POST['name'];
    echo "<p style=\" margin-left: 20px; color: #283618; font-size: 30px; font-weight: bold;\">Name: $name</p>";
    echo "<br>";
    $bill1 = new Unit();
    echo $bill1->ammountCalc();
    
    ?>
</body>
</html>