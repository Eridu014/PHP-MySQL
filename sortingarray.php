<!DOCTYPE html>
<html lang = "eng">
<head>
    <meta charset = "utf - 8">
    <title> Sorting Arrays </title>
</head>
<body>
<table border= "0" cellspacing = "3" cellpadding = "3" align = "left">

<thread>
    <tr>
        <th><h2>Rating</h2></th>
        <th><h2>Title</h2></th>
    </tr>
</thread>
<tbody>
<?php # scipt 2.8 - sortingarray.php
$movies = [
    'Casablanca' => 10,
    'To Kill A Mockingbird' => 10,
    'Donnie Darko' => 7,
    'Stranger Than Fiction' => 9,
    'The English Patient' => 2,
    'Alien' => 9,
    'Home Alone' => 8,
    'District 9' => 5,
    'There Will Be Blood' => 10,
    'Bruce Almighty' => 4,
    'Twilight' => 2,
    'Full Metal Jacket' => 9
];

//display in original order
echo'<tr><td colspan = "2"><strong>In their original order:</strong></td></tr>';
foreach($movies as $title => $rating) {
    echo "<tr><td>$rating</td>
    <td>$title</td></tr>\n";
}

//display movies ordered by title
ksort($movies);
echo '<tr><td colspan = "2"><strong>
Sorted by title:</strong></td></tr>';
foreach($movies as $title => $rating) {
    echo "<tr><td>$rating</td>
    <td>$title</td></tr>\n";
}
//display movies sorted by rating
arsort($movies);
echo '<tr><td colspan = "2"><strong>
Sorted by rating:</strong></td</tr>';
foreach($movies as $title => $rating) {
    echo "<tr><td>$rating</td>
    <td>$title</td></tr>\n";
}


?>
<tbody>
</table>
</body>
</html>