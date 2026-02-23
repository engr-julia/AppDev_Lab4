<?php
header('Content-Type: text/plain'); // Adds this line to fix formatting

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " is divisible to 3 and 5\n";
    } elseif ($i % 3 == 0) {
        echo $i . " is divisible to 3\n";
    } elseif ($i % 5 == 0) {
        echo $i . " is divisible to 5\n";
    } else {
        echo $i . "\n";
    }
}
?>