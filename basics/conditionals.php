<?php
    for($i = 1; $i <= 100; $i++) {
        if($i % 3 === 0) {
            echo "Fizz <br>";
        } elseif($i % 5 === 0) {
            echo "Buzz <br>";
        } elseif($i % 15 === 0) {
            echo "Fizzbuzz <br>";
        } else {
            echo "$i <br>";
        };
    }

    echo "<br>";

    $color = 'Red';
    switch($color) {
        case 'Green':
            echo "It's Green!";
            break;
        case 'Blue':
            echo "It's Blue!";
            break;
        case 'Red':
            echo "It's Red!";
            break;
        case 'Purple':
            echo "It's Purple!";
            break;
    }
?>