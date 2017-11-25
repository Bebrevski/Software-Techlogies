<form>
    Celsius: <input type="text" name="cel" />
    <input type="submit" value="Convert">
    <?php
    if (isset($_GET['cel']))
    {
        $celsius = $_GET['cel'];
        $result = floatval($_GET['cel']) * 1.8 + 32;
        echo "$celsius &deg;C = $result &deg;F";
    }
    ?>
</form>
<form>
    Fahrenheit: <input type="text" name="fah" />
    <input type="submit" value="Convert">
    <?php
    if (isset($_GET['fah']))
    {
        $fah = $_GET['fah'];
        $result = (floatval($_GET['fah'])-32) / 1.8;
        echo "$fah &deg;F = $result &deg;C";
    }
    ?>
</form>