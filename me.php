<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World at php</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1>Hello </h1>

    <?php
    echo "Variables ";
    echo "<ul>";
    $name = "Jess";
    $age = 20;
    $food = "Chicken";
    $present = true;

    echo "Eyooww! My name is $name! i am $age yrs old i like $food";
    echo "<ul>";
    echo "<li> Student name : " . $name . "</li>";
    echo "<li> Age: " . $age . "</li>";
    echo "<li> favorite food: " . $food . "</li>";
    echo "<li> present: " . $present . "</li>";
    ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>