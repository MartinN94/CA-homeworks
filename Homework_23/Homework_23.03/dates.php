<?php
    date_default_timezone_set('UTC');

    echo "<b>Exercise 1:</b> <br>";
    echo "<br>";

    echo "© ".date('Y')." PHP Exercises - CodeAcademy <br>";

    echo "<br>";

    echo "<b>Exercise 2:</b> <br>";
    echo "<br>";

    $birthDate = strtotime("26-08-1994");
    $currentDate = date("d-m-Y");
    $currTime = strtotime($currentDate);
    $fixedBirthdate = date_create(date("Y", $currTime) . "-" . date("m", $birthDate) . "-" . date("d", $birthDate));

    $diff = date_diff(date_create(date("d-m-Y", $currTime)), $fixedBirthdate);
    echo "Days left to my birthday: ".$diff->format("%a")."<br>";

    echo "<br>";

    echo "<b>Exercise 3:</b> <br>";
    echo "<br>";

    $currDate = 'September 01, 2020';
    $currDateTime = strtotime($currDate);

    echo date("Y/m/d", $currDateTime)."<br>";
    echo date("y.m.d", $currDateTime)."<br>";
    echo date("d-m-y", $currDateTime)."<br>";

    echo "<br>";

    echo "<b>Exercise 4:</b> <br>";
    echo "<br>";

    $date1 = date_create("1981-11-04");
    $date2 = date_create("2013-09-04");
    
    $dateDifference = date_diff($date1, $date2)->format('%y years, %m months and %d days');
    
    echo $dateDifference."<br>";
    echo "<br>";


    echo "<b>Exercise 5:</b> <br>";
    echo "<br>";

    $date = "2020-09-12";

    echo date("d-m-Y", strtotime($date))."<br>";
    echo "<br>";

    echo "<b>Exercise 6:</b> <br>";
    echo "<br>";

    function diffInDays($date1, $date2){
        $date1 = strtotime($date1);
        $date2 = strtotime($date2);
        $diff = $date2 - $date1;
        echo "Difference between dates in days is: ".round($diff / (60 * 60 * 24))." days. <br>";
    }

    diffInDays("1981-11-04","2013-09-04");
    echo "<br>";

    echo "<b>Exercise 7:</b> <br>";
    echo "<br>";

    $date = "2008-02-23";
    $first = date("Y-m-d l", strtotime("first day of this month, $date"));
    $last = date("Y-m-d l", strtotime("last day of this month, $date"));

    echo $first."<br>";
    echo $last."<br>";

    echo "<br>";

    echo "<b>Exercise 8:</b> <br>";
    echo "<br>";

    $date = "2020-10-08";
    $dateChangeDay = date("l", strtotime($date));
    $dateChangeDate =  date("d", strtotime($date));
    echo $dateChangeDay." the ".$dateChangeDate."th <br>";

    echo "<br>";

    echo "<b>Exercise 9:</b> <br>";
    echo "<br>";

    $date = "2020-09-07 10:30:00";
    $dateChangeFormat = date("h:m a dS,F", strtotime($date));

    echo $dateChangeFormat."<br>";
    echo "<br>";

    echo "<b>Exercise 10:</b> <br>";
    echo "<br>";

    function convertTime($data, $mer){
        if ($mer == "am") {
            $am = date("Y-m-d 09:00:00", strtotime($data));
            echo $am."<br>";
        }elseif ($mer == "pm") {
            $pm = date("Y-m-d 12:00:00", strtotime($data));
            echo $pm."<br>";
        };
    }
    convertTime("2020/05/22","pm");
    convertTime("2020/05/22","am");



    







   



?>