<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment 6-1">
    <meta http-equiv="author" content="John Paul Manzano BSCS3A">
    <title>Assignment 6-1</title>
</head>
<body>
    <h3>
        <?php
            function checkAge($age){
                echo "The parameter is $age<br/>";
                if($age<10){
                    echo "You are too young<br/><br/>";
                    return $age;
                }elseif($age>10&&$age<18){
                    echo "Young lad!<br/><br/>";
                    return $age;
                }elseif($age>18&&$age<30){
                    echo "Young adult!<br/><br/>";
                    return $age;
                }elseif($age>30&&$age<60){
                    echo "Adulthood<br/><br/>";
                    return $age;
                }else{
                    echo "You're old!<br/><br/>";
                    return $age;
                }
            }
            checkAge(32);
            checkAge(7);
            checkAge(66);
        ?>
    </h3>
</body>
</html>