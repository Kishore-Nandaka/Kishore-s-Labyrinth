<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        function addNums($firstNum,$secondNum){
            $result = $firstNum+$secondNum;
            return $result;
        }
        echo addNums(10,40);
    ?>
</body>
</html>