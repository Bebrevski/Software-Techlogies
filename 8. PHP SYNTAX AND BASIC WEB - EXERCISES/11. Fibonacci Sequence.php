<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $fib0 = 0;
    $fib1 = 1;

    $limit = intval($_GET['num']);

    $result = $fib0 + $fib1;
    echo "$result ";
    for ($i = 1; $i < $limit; $i++) {
        echo "$result ";

        $fib0 = $fib1;
        $fib1 = $result;

        $result = $fib0 + $fib1;
    }
}
?>
</body>
</html>