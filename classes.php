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
                    echo"<p style=\"color: #283618;margin-left: 20px; font-size: 25px\"> Ammount: $ammount</p>";
                    break;
                case $units > 20 && $units <= 49:
                    $ammount = $units * 40;
                    echo"<p style=\"color: #283618;margin-left: 20px; font-size: 25px\"> Ammount: $ammount</p>";
                    break;
                case $units > 49 && $units <= 100:
                    $ammount = $units * 45;
                    echo"<p style=\"color: #283618;margin-left: 20px; font-size: 25px\"> Ammount: $ammount</p>";
                    break;
                case $units > 100:
                    $ammount = $units * 50;
                    echo"<p style=\"color: #283618;margin-left: 20px; font-size: 25px\"> Ammount: $ammount</p>";
                    break;
                default: echo"<p style=\"color: #283618;margin-left: 20px; font-size: 25px\"> Ammount: 0</p>";;
            }
        }
    }
    ?>
</body>
</html>