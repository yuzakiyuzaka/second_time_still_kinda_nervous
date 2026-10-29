
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $species = $_POST['species'];
    $food = $_POST['food'];
    $partysize = $_POST['partysize'];

    echo "<p>Welcome $firstname $lastname!<br>";

    echo "You are now booked on the ";

    $tours = array();

    if (isset($_POST['4day'])) {
        $tours[] = "Four-day tour";
    }

    if (isset($_POST['10day'])) {
        $tours[] = "Ten-day tour";
    }

    if (count($tours) > 0) {
        echo implode(" and ", $tours);
    } else {
        echo "no tour";
    }

    echo "<br>";

    $speciesNames = array(
        "M" => "Human",
        "D" => "Dwarf",
        "E" => "Elf",
        "H" => "Hobbit"
    );

    echo "Species: " . $speciesNames[$species] . "<br>";
    echo "Age: $age<br>";
    echo "Meal Preference: $food<br>";
    echo "Number of travellers: $partysize</p>";
    ?>
</body>
</html>
