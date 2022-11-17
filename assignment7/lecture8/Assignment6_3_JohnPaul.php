<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment 6-3">
    <meta http-equiv="author" content="John Paul Manzano BSCS3A">
    <title>Assignment 6-3</title>
</head>
<body>
    <h3>
        <?php
            $age = 31;
            echo "You are $age years old and...<br/><br/>";
            function readytoVote($age){
                $voter = $age;
                if($voter<18){
                    echo "You are too young to vote.";
                }else{
                    echo "You are legal to vote.";
                }
            }
            echo readytoVote($age);
        ?>
    </h3>
</body>
</html>