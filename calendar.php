<!DOCTYPE html>
<html lang = "eng">
<head>
    <meta charset = "utf-8">
    <title>Calendar</title>
</head>
<body>
<form action = "calendar.php" method = "post">
<?php #script 2.9 calendar.php #2
    //This script makes 3 pulldown menus
    //for an HTML form months, days, and years
    $month = [
        1 => 'Jan',
        2 => 'Feb',
        3 => 'Mar',
        4 => 'Apr',
        5 => 'May',
        6 => 'Jun',
        7 => 'Jul',
        8 => 'Aug',
        9 => 'Sept',
        10 => 'Oct',
        11 => 'Nov',
        12 => 'Dec'
    ];
    //make month pulldown months
    echo '<select name = "month">';
    foreach($month as $key => $value) {
        echo "<option value=\"$key\">$value</option>\n";
    }
    echo"</select>";

    //make pulldown menu for days
    echo'<select name = "day">';
    for($day = 1; $day <= 31; $day++) {
        echo "<option value =\"$day\">$day</option>\n";
    }
    echo"</select>";

    //make pulldown menu for year
    echo'<select name = "year">';
    for($year = 2021; $year <= 2050; $year++) {
        echo "<option value =\"$year\">$year</option>\n";
    }
    echo"</select>";

?>
</form>
</body>
</html>