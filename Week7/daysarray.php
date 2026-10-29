<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days array</title>
</head>
<body>
<?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo "<p>The days of the week in English are:<br>";
    echo implode(", ", $days) . ".</p>";

    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

    echo "<p>The days of the week in French are:<br>";
    echo implode(", ", $days) . ".</p>";
?>  
</body>
</html>