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
    $limit = intval($_GET['num']);

    for ($i = $limit; $i >= 2; $i--) {
        if (IsPrime($i)) {
            echo "$i ";
        }
    }
}
?>
</body>
</html>

<?php
function IsPrime($num): bool
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

?>