<!DOCTYPE html>
<html lang = en>
    <head>
        <meta charset = "utf - 8">
        <title>Arrays in PHP</title>
    </head>
    <body>
    <form action = "calendar.php" method = "post">
        <?php # script 2.6 - calender.php
        //This script makes 3 pull down menus for an HTML form: months, days, years

        //make monthly array
        $months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        //make days
        $days = range(1, 31);
        $years = range(2021, 2050);

        //make months pull-down menu
        echo '<select name = "month">';
        foreach ($months as $key => $value) {
            echo "<option value = \"$key\">
            $value</option>\n";
        }
        echo '<select>';

        //make days pull down menu
        echo '<select name = "day">';
        foreach ($days as $value) {
            echo "<option value = \"$value\">
            $value</option?\n";
        }
        echo '</select>';

        //make years pull-down menu
        echo '<select name = "year">';
        foreach ($years as $value) {
            echo "<option value = \"$value\">
            $value</option\n";
        }
        echo '</select>';


    ?>
    </form>
    </body>
</html>