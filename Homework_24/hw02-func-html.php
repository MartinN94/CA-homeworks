<?php 

    const MONTHS = [
        "January" => "31",
        "February" => "28 days, if leap year 29",
        "March" => "31",
        "April" => "30",
        "May" => "31",
        "June" => "30",
        "July" => "31",
        "August" => "31",
        "September" => "30",
        "October" => "31",
        "November" => "30",
        "December" => "31"
    ];
    
    function makeOptions(){
        foreach (MONTHS as $key => $value) {
            echo "<option value='$key'>$key</option>";
        }
    };

    function makeSelect(){
        if (MONTHS) {
            echo "<form action='' method='POST'>";
            echo "<label for='months'><b>Please choose a month.</b></label>";
            echo "<br>";
            echo "<br>";
            echo "<select name='months' id='months'>";
            echo "<option selected>Choose month</option>";
            echo makeOptions();
            echo "</select>";
            echo "<button type='submit' name='submitt'>Submit</button>";
            echo "</form><br>";
            echo response();
        } else {
            echo "<script> alert('Select valid months array!') </script>";
        }
        
    };

    function response(){
        if (isset($_POST['submitt'])) {
            $selected = $_POST["months"];
        };
        if (isset($selected)) {
            echo "<p>".$selected." has: ".MONTHS[$selected]." days </p>";
        };
    };

?>


