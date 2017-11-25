<?php
if (isset($_GET['person']) && strlen($_GET['person']) > 1) {
    $person = htmlspecialchars($_GET['person']);
    echo "Hello, $person!";
} else {
    ?>
    <form>
        Name: <input type="text" name="person"/>
        <input type="submit"/>
    </form>
    <?php
}
?>