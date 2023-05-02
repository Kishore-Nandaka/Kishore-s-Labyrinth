<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetType</title>
</head>
<body>
    <?php 
    $undefined = 3.14;
    
    echo $undefined," is ";
    echo gettype($undefined),"<br>";
    settype($undefined,'string');
    echo $undefined," is ";
    echo gettype($undefined),"<br>";
    settype($undefined,'integer');
    echo $undefined," is ";
    echo gettype($undefined),"<br>";
    settype($undefined,'Double');
    echo "$undefined is ";
    settype($undefined,'Boolean');
    echo gettype($undefined),"<br>";
   

    ?>
</body>
</html>