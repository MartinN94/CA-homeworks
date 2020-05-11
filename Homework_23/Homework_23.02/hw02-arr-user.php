<?php
    if (isset($_POST["submit"])) {
        $city = $_POST["city"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        //$weather = $_POST["weather"];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p>Please enter your information:</p>
        <label for="city">City:</label>
        <input type="text" name="city" id="city">
        <label for="month">Month:</label>
        <input type="text" name="month" id="month">
        <label for="city">Year:</label>
        <input type="text" name="year" id="year">
        <br>
        <p>Please choose the kinds of weather you experienced from the list below.</p>
        <p>Choose all that applay.</p>
        <br>
        <input type="checkbox" id="rain" name="weather[]" value="rain">
        <label for="rain">Rain</label><br>
        <input type="checkbox" id="sunshine" name="weather[]" value="sunshine">
        <label for="sunshine">Sunshine</label><br>
        <input type="checkbox" id="clouds" name="weather[]" value="clouds">
        <label for="clouds">Clouds</label><br>
        <input type="checkbox" id="hail" name="weather[]" value="hail">
        <label for="hail">Hail</label><br>
        <input type="checkbox" id="sleet" name="weather[]" value="sleet">
        <label for="sleet">Sleet</label><br>
        <input type="checkbox" id="snow" name="weather[]" value="snow">
        <label for="snow">Snow</label><br>
        <input type="checkbox" id="wind" name="weather[]" value="wind">
        <label for="wind">Wind</label><br>
        <br>
        <button type="submit" name="submit">Go!</button>
        <button href="http://app.test/hw02-arr-user.php">Reset</button>
    </form>
    <br>
        <?php
             if (isset($_POST["submit"])){
                echo "<p>In $city in the month of $month $year, you observed the following weather:<p>";
                
            };
        ?>
    <ul>
            <?php
                
            if(isset($_POST['submit'])){
                if(!empty($_POST['weather'])){

                foreach($_POST['weather'] as $value){
                echo "<li>".$value."</li>"."</br>";
                        }
                    }
                }
                
            ?>
    </ul>

</body>
</html>