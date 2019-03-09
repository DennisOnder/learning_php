<?php

    $greeting = 'Hello, User!';

    // Equal sign is there for setting a default value in case a parameter has not been provided once the function was called
    function greetUser($message = 'Hello, World!') {
        echo $message . "<br>";
    }

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    greetUser($greeting);

    echo addNumbers(1, 3);
?>