<html>
<body>

The max multiplicand is: <?php echo $_GET["max-multiplicand"]; ?><br>
The min multiplicand is: <?php echo $_GET["min-multiplicand"]; ?><br>
The min multiplier is: <?php echo $_GET["min-multiplier"]; ?><br>
The max multiplier is: <?php echo $_GET["max-multiplier"]; ?><br>
<?php $maxcand = $_GET["max-multiplicand"];?>
<?php $mincand = $_GET["min-multiplicand"];?>
<?php $minmult = $_GET["min-multiplier"];?>
<?php $maxmult = $_GET["max-multiplier"];?>
 
<?php echo $maxcand; ?><br>
<?php echo $mincand; ?><br>
<?php echo $minmult; ?><br>
<?php echo $maxmult; ?><br>
<?php
if ($mincand > $maxcand)
{
	echo 'The minimum multiplicand entered is greater than the maximum multiplicand entered';
}
?>
<?php
if ($minmult > $maxmult)
{
	echo 'The minimum multiplier entered is greater than the maximum multiplier entered';
}
?>
</body>
</html> 