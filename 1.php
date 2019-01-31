<?php

$page = file_get_contents('http://testapp.wemakeprice.com/release/android/wemakeprice/4.38.1/qa/');

// name will be inside a span ctl00_Agent1_lblName, store it in $agent_name
preg_match($pattern, $subject[], $matches );

// display agent name matches
print_r($matches);
?>
