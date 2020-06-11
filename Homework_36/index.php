<?php
require "MartinN94/Select/ASelect.php";
require "MartinN94/Select/HtmlSelect.php";
require "MartinN94/Select/BootstrapSelect.php";

use MartinN94\Select\HtmlSelect;
use MartinN94\Select\BootstrapSelect;

$browsers= [
    "None",
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other"
 ];
 echo "<h1>HtmlSelect: </h1><br>";
 $htmlSelect = new HtmlSelect();
 $htmlSelect->setName('browserWork');
 $htmlSelect->setValue($browsers);

 $htmlSelect->makeSelect();

 echo "<br>";
 echo "<br>";

 echo "<h1>BootstrapSelect: </h1><br>";
 $bootstrapSelect = new BootstrapSelect();
 $bootstrapSelect->setName('browserWork');
 $bootstrapSelect->setValue($browsers);

 $bootstrapSelect->makeSelect();



