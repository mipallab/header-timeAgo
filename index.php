<?php

if(file_exists(__DIR__ . "/autoload.php")) {
    require_once __DIR__ . "/autoload.php";
} else {
    echo "not linked. index.php";
}

echo headerTitle("This is heading.", 'h3', "white", 'tahoma', 'right', 'brown');

echo headerTitle("Hello.. Bangladesh");
?>