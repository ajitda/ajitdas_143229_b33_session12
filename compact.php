<?php

$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";
$nothing_here = "nothing";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result);
?>
<br>
<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);
?>
