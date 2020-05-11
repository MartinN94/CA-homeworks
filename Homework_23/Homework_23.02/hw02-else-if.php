<?php
    $day = $_POST["day"];
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
        <label for="day">Enter day of week!</label>
        <input type="text" name="day">
        <button type="submitt">Submitt</button>
    </form>
    <br>
    <?php
        if($day == "Monday"):{
            echo "<p>Laugh on Monday, laugh for danger.</p>";
        }
        elseif($day == "Tuesday"):{
            echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
        }
        elseif ($day == "Wednesday"):{
            echo "<p>Laugh on Wednesday, laugh for a letter.</p>";
        }
        elseif($day == "Thursday"):{
            echo "<p>Laugh on Thursday, something better.</p>";
        }
        elseif ($day == "Friday"):{
            echo "<p>Laugh on Friday, laugh for sorrow.</p>";
        }
        elseif ($day == "Saturday"):{
            echo "<p>Laugh on Saturday, joy tomorrow.</p>";
        }
        else: {
            unset($day);
            echo "<p>Please enter day of week!</p>";
        } 
        endif;

    ?>
</body>
</html>