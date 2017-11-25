<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php for ($i = 0; $i <= 4; $i++): ?>
    <button style="background color blue">1</button>
<?php endfor; ?>

</br>

<?php for ($i = 0; $i < 3; $i++): ?>
    <button style="background: color blue">1</button>
    <?php for ($j = 0; $j < 4; $j++): ?>
        <button>0</button>
    <?php endfor; ?>
    </br>
<?php endfor; ?>

<?php for ($i = 0; $i <= 4; $i++): ?>
    <button style="background: color blue">1</button>
<?php endfor; ?>
</br>

<?php for ($i = 0; $i < 3; $i++): ?>
    <?php for ($j = 0; $j < 4; $j++): ?>
        <button>0</button>
    <?php endfor; ?>
    <button style="background: color blue">1</button>
    </br>
<?php endfor; ?>

<?php for ($i = 0; $i <= 4; $i++): ?>
    <button style="background: color blue">1</button>
<?php endfor; ?>

</body>
</html>