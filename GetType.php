<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetType</title>
</head>
<body>
    <?php
    $testing ;
    echo gettype($testing)."<br>";
    $testing = 5;
    echo gettype($testing)."<br>";
    $testing = "Five";
    echo gettype($testing)."<br>";
    $testing = 5.0;
    echo gettype($testing)."<br>";
    $testing = true;
    echo gettype($testing)."<br>";
    ?>
</body>
</html>