<?php
date_default_timezone_set('asia/dhaka');

if(file_exists(__DIR__ . "/autoload.php")) {
    require_once __DIR__ . "/autoload.php";
} else {
    echo "not linked. index.php";
}

echo headerTitle("This is heading.", 'h3', "white", 'tahoma', 'right', 'brown');

echo headerTitle("Hello.. Bangladesh");


echo timeAgo("2020-06-31 12:52:00");
?>