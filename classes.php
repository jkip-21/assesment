<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class  Unit{
       
        function ammountCalc(){
            $units = $_POST['units'];
            switch($units) {
                case $units >= 0 && $units <= 20:
                    $ammount = $units * 35;
                    echo"<h3 style=\"color: rgb(7, 116, 79);margin-left: 20px; font-size: 25px\"> Ammount: $ammount</h3>";
                    break;
                case $units > 20 && $units <= 49:
                    $ammount = $units * 40;
                    echo"<h3 style=\"color: rgb(7, 116, 79);margin-left: 20px; font-size: 25px\"> Ammount: $ammount</h3>";
                    break;
                case $units > 49 && $units <= 100:
                    $ammount = $units * 45;
                    echo"<h3 style=\"color: rgb(7, 116, 79);margin-left: 20px; font-size: 25px\"> Ammount: $ammount</h3>";
                    break;
                case $units > 100:
                    $ammount = $units * 50;
                    echo"<h3 style=\"color: rgb(7, 116, 79);margin-left: 20px; font-size: 25px\"> Ammount: $ammount</h3>";
                    break;
                default: echo"<h3 style=\"color: rgb(7, 116, 79);margin-left: 20px; font-size: 25px\"> Ammount: 0</h3>";;
            }
        }
    }
    ?>
</body>
</html>