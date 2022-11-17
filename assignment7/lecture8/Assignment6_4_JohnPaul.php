<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment 6-4">
    <meta http-equiv="author" content="John Paul Manzano BSCS3A">
    <title>Assignment 6-4</title>
</head>
<body>
    <h3>
        <?php
            $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
            "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
            "Finland"=>"Helsinki", "France" => "Paris",
            "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" =>
            "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
            "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
            "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
            Kingdom"=>"London", "Cyprus"=>"Nicosia",
            "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
            "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
            "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
            asort($ceu);
            echo "<table border=\"3\"align=\"left\">";
            foreach($ceu as $country => $capital){
                echo "<tr><td>";
                echo "The capital of $country is $capital";
                echo "</td></tr>";
            }
            echo "</table>";
        ?>
    </h3>
</body>
</html>