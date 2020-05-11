<?php
    echo "Exercise 1"."<br>";

    $a = array( 0, 1, 2, 3, 4 );
    echo $a["3"]."<br>";

    echo "Exercise 2"."<br>";

    $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
    echo $a["three"]."<br>";

    echo "Exercise 3"."<br>";

    $a = array(
        array(
            0,
            1
        ),
        array(
            2,
            array(
                3
            )
        )
    );

    echo    ($a[1][1][0])."<br>" ;

    echo "Exercise 4"."<br>";

    $a = array(
        "a"=>array(
            "b"=>0,
            "c"=>1
        ),
        "b"=>array(
            "e"=>2,
            "o"=>array(
                "b"=>3
            )
        )
    );

    echo ($a["b"]["o"]["b"])."<br>";

    echo "Exercise 5"."<br>";

    $a = "a,b,c,d,e,f";

    var_dump (explode(",", $a))."<br>";

    echo "Exercise 6"."<br>";

    $a = "a,b,c,d,e,f";
    $key = explode(",", $a);
    $value = explode(",", $a);
    $arr = [
        "$key[0]"=>"$value[0]",
        "$key[1]"=>"$value[1]",
        "$key[2]"=>"$value[2]",
        "$key[3]"=>"$value[3]",
        "$key[4]"=>"$value[4]",
        "$key[5]"=>"$value[5]"
    ];

    var_dump($arr)."<br>";

    echo "Exercise 7"."<br>";

    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
    );
    $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
    );

    $keysAndValues = [
        $keys["field1"] => $values["field1value"],
        $keys["field2"] => $values["field2value"],
        $keys["field3"] => $values["field3value"]
    ];

    var_dump($keysAndValues)."<br>";

    echo "Exercise 8"."<br>";

    $transactions = array(
        array(
            "debit"=>2,
            "credit"=>3
        ),
        array(
            "debit"=>15,
            "credit"=>14
        )
    );
    $calc1 = abs($transactions[0]["credit"]-$transactions[0]["debit"]);
    $calc2 = abs($transactions[1]["credit"]-$transactions[1]["debit"]);


    $transactions[0]["amount"] = $calc1;
    $transactions[1]["amount"] = $calc2 ;

    var_dump($transactions)."<br>";

    echo "Exercise 9"."<br>";

    $a = array( 0, 1, 2, 3, 4, 5, 6 );  

    $sum = 0;
    foreach($a as $key => $value) {
    $sum += $value; 
    }
    echo $sum;


?>