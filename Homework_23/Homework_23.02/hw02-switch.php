<?php
    //if(isset($_POST['submit'])){
        $days = $_POST['days'];
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="#" method="post">
                <select name="days">
                <option value="Select" selected></option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
            <button type="submit" name="submit">Select day!</button>
            <button type="back" href="http://app.test/hw02-switch.php">Back</button>
        </form>
        <?php

        ?>

    <?php
        if(isset($_POST['days'])){
        switch ($days) {
            case "Monday":
                echo "Laugh on Monday, laugh for danger.";
                break;
            case "Tuesday":
                echo "Laugh on Tuesday, kiss a stranger.";
                break;
            case "Wednesday":
                echo "Laugh on Wednesday, laugh for a letter.";
                break;
            case "Thursday":
                echo "Laugh on Thursday, something better.";
                break;
            case "Friday":
                echo "Laugh on Friday, laugh for sorrow.";
                break;
            case "Saturday":
                echo "Laugh on Saturday, joy tomorrow.";
                break;
            default:
              echo "Please choose day!";
          }

        }
    ?>

</body>
</html>