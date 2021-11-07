<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>Mullti-dimensional arrays</title>
</head>
<body>
    <p>
        Some North American States, Provinces, and Territories:
    </p>
    <?php #script 2.7 - multi.php

    //array of Mexican states
    $mexico = [
        'YU' => 'Yucatan',
        'BC' => 'Baja California',
        'OA' => 'Oaxaca'
    ];
    //array of american states
    $us = [
        'MD' => 'Maryland',
        'TX' => 'Texas',
        'AL' => 'Alabama'
    ];
    //array of canadian provinces
    $canada = [
        'QC' => 'Quebec',
        'AB' => 'Alberta',
        'YT' => 'Yukon'
    ];
    //combine all 3 into 1 array
    $n_america = [
        'Mexico' => $mexico,
        'USA' => $us,
        'Canada' => $canada
    ];

    //foreach loop
    foreach ($n_america as $country => $list) {
        echo "<h2>$country</h2><ul>";


        foreach($list as $k => $v) {
            echo "<li>$k - $v</li>\n";
        }

        //close the list
        echo "</ul>";
    } //Enf of main foreach

    ?>
</body>
</html>