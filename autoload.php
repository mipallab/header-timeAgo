<?php

if(file_exists(__DIR__ . "/app/functions.php")) {
    require_once __DIR__ ."/app/functions.php";
} else {
    echo "not linked. autoload.php";
}
