<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment 6-2">
    <meta http-equiv="author" content="John Paul Manzano BSCS3A">
    <title>Assignment 6-2</title>
</head>
<body>
    <h3>
        <?php
            echo "<table border=\"1\"align=\"center\">";
            for($square=1; $square<=50; $square++){
                echo "<tr><td>";
                echo "$square * ".$square;
                echo "</td><td>";
                echo "= ".$square * $square;
                echo "</td></tr>";
            }
            echo "</table>";
        ?>
    </h3>
</body>
</html>