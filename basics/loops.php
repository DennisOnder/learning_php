<?php 
    // For, For Each, While, Do While loops

    // For loop
    for($i = 1; $i <= 10; $i++) {
        echo 'Iteration: ' . $i;
        echo '<br>';
    };

    // While loop
    $counter = 1;
    while($counter <= 10) {
        echo '<br>';
        echo 'While Loop: Iteration: ' . $counter;
        $counter++;
    }

    echo '<br>';

    // For Each Loop
    $people = array('Kevin', 'Dennis', 'Jeremy');
    foreach($people as $person) {
        echo '<br>';
        echo $person;
    };

    echo '<br>';

    // Associative Array
    $newArray = array('Brad' => 35, 'Jose' => 32, 'William' => 25);
    foreach($newArray as $user => $age) {
        echo '<br>';
        echo "First Name: " . $user . ", Age: " . $age;
    }
?>