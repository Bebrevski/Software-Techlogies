<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1"/>
    Y: <input type="text" name="num2"/>
    Z: <input type="text" name="num3"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $arr = [
        floatval($_GET['num1']),
        floatval($_GET['num2']),
        floatval($_GET['num3']),
    ];

    $newArr = array_filter($arr, function ($num) {
        return $num <= 0;
    }, ARRAY_FILTER_USE_BOTH);

    if (count($newArr) === 1 || count($newArr) === 3){
        echo 'Negative';
    }else {
        echo 'Positive';
    }
}
?>
</body>
</html>