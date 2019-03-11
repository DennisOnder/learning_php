<?php
    if(isset($_GET['name'])) {
        $name = htmlentities($_GET['name']);
        echo $name;
    }

    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        echo $name;
    }

    // if(isset($_REQUEST['name'])) {
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get and Post</title>
</head>
<body>
    <form method="POST" action="index.php">
        <div>
        <label>Name</label>
        <br>
        <input type="text" name="name">
        </div>
        <div>
        <label>Email</label>
        <br>
        <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li><a href="index.php?name=Dennis">Dennis</a></li>
        <li><a href="index.php?name=Steve">Steve</a></li>
        <li><a href="index.php?name=Khan">Khan</a></li>
    </ul>
    <h1>
    <?php echo "{$name}'s profile"; ?>
    </h1>
</body>
</html>