<?php
    $city = $_POST["city"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw02-interactive-form</title>
</head>
<body>
        <form action="" method="POST">
            <label for="city">Enter your favourite city!</label>
            <br>
            <input type="text" name="city" id="city">
            <button type="submitt">Submitt</button>
        </form>
        <?php
            if (isset($city)):
                echo "<p>Your favorite city is ".$city.", where". $city." is the input from the form.</p>";
            else: {
                echo "<p>Please enter your favourite city name!</p>"; }
            endif;
        ?>
</body>
</html>