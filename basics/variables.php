<?php
    // Comment
    /* Comment */
    # Comment

    // Variables
    // Rules:
    // 1. Prefix with $
    // Variable name has to start with a letter or an underscore
    $_output = 'Hello, World!';

    // Data Types
    // Strings
    $myString = 'A new string';
    // Integers
    $myInteger = 1;
    // Floats
    $myFloat = 1.5;
    // Boolean
    $myBool = true;
    // Arrays, objects, resources

    // Arithmetic operations
    $sum = $myInteger * $myFloat;

    // Appending strings
    $greeting = $myString . ' has been created.';
    $greeting2 = "$greeting Woo-hoo!";

    // Escaping strings
    $newString = 'They\'re here.';

    // Defining constants 
    define(FOO, 'A constant');
    echo FOO;
?>