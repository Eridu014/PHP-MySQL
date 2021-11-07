<html>
<body>
<!--Your code goes here-->
<?="${_GET['div_num']} divided by ${_GET['div_den']} is:"?>
<h4><?=$_GET['div_num']/$_GET['div_den']?></h4>
<?php print_r($_GET)?>
<a href="index.php">Reset</a>
</body>
</html>